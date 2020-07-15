<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CatalogMessageBroker\Model\MessageBus;

use Magento\CatalogStorefront\Model\Storage\Client\CommandInterface;
use Magento\CatalogStorefront\Model\Storage\Client\DataDefinitionInterface;
use Magento\CatalogStorefront\Model\Storage\State;
use Magento\CatalogExtractor\DataProvider\DataProviderInterface;
use Magento\CatalogMessageBroker\Model\FetchProductsInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\CatalogStorefront\Model\MessageBus\Consumer as OldConsumer;
use Magento\CatalogStorefront\Model\MessageBus\CatalogItemMessageBuilder;
use Magento\Framework\App\State as AppState;
use Psr\Log\LoggerInterface;
use Magento\CatalogMessageBroker\Model\ProductDataProcessor;

/**
 * Process product update messages and update storefront app
 */
class ProductsConsumer extends OldConsumer
{
    /**
     * @var DataProviderInterface
     */
    private $dataProvider;

    /**
     * @var FetchProductsInterface
     */
    private $fetchProducts;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var AppState
     */
    private $appState;

    /**
     * @var ProductDataProcessor
     */
    private $productDataProcessor;

    /**
     * @param CommandInterface $storageWriteSource
     * @param DataDefinitionInterface $storageSchemaManager
     * @param State $storageState
     * @param CatalogItemMessageBuilder $catalogItemMessageBuilder
     * @param LoggerInterface $logger
     * @param DataProviderInterface $dataProvider
     * @param FetchProductsInterface $fetchProducts
     * @param StoreManagerInterface $storeManager
     * @param AppState $appState
     * @param ProductDataProcessor $productDataProcessor
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        CommandInterface $storageWriteSource,
        DataDefinitionInterface $storageSchemaManager,
        State $storageState,
        CatalogItemMessageBuilder $catalogItemMessageBuilder,
        LoggerInterface $logger,
        DataProviderInterface $dataProvider,
        FetchProductsInterface $fetchProducts,
        StoreManagerInterface $storeManager,
        AppState $appState,
        ProductDataProcessor $productDataProcessor
    ) {
        parent::__construct(
            $storageWriteSource,
            $storageSchemaManager,
            $storageState,
            $catalogItemMessageBuilder,
            $logger
        );
        $this->logger = $logger;
        $this->dataProvider = $dataProvider;
        $this->fetchProducts = $fetchProducts;
        $this->storeManager = $storeManager;
        $this->appState = $appState;
        $this->productDataProcessor = $productDataProcessor;
    }

    /**
     * Process message
     *
     * @param string $ids
     */
    public function processMessage(string $ids)
    {
        $ids = json_decode($ids, true);
        $dataPerType = [];
        $overrides = $this->fetchProducts->execute($ids);

        // @todo eliminate store manager
        $stores = $this->storeManager->getStores(true);
        $storesToIds = [];
        foreach ($stores as $store) {
            $storesToIds[$store->getCode()] = $store->getId();
        }

        foreach ($overrides as $override) {
            $storeId = $storesToIds[$override['store_view_code']];
            $products = [];
            // @todo this is taken from old consumer, need to revise in the future
            $this->appState->emulateAreaCode(
                \Magento\Framework\App\Area::AREA_FRONTEND,
                function () use ($override, $storeId, &$products) {
                    try {
                        // @todo eliminate calling old API when new API can provide all of the necessary data
                        $products = $this->dataProvider->fetch([$override['id']], [], ['store' => $storeId]);
                    } catch (\Throwable $e) {
                        $this->logger->critical($e);
                    }
                }
            );
            if (count($products) > 0) {
                $product = $this->productDataProcessor->merge($override, array_pop($products));
                $product['store_id'] = $storeId;
                $dataPerType['product'][$storeId][self::SAVE][] = $product;
            }
        }
        try {
            $this->saveToStorage($dataPerType);
        } catch (\Throwable $e) {
            $this->logger->critical($e);
        }
    }

    /**
     * Override data returned from old API with data returned from new API
     *
     * @param array $product
     * @param array $override
     * @return array
     */
    private function mergeData($product, $override)
    {
        return array_merge(
            $product,
            $this->mapBasicFields($override),
            $this->mapAttributes($override)
        );
    }

    /**
     * Map basic fields to existing format
     *
     * @param array $override
     * @return array
     */
    private function mapBasicFields(array $override)
    {
        return [
            'id' => $override['id'],
            'sku' => $override['sku'],
            'name' => $override['name'],
            'meta_description' => $override['meta_description'],
            'meta_keyword' => $override['meta_keyword'],
            'meta_title' => $override['meta_title'],
            //'tax_class_id' => $override['tax_class_id'],
            //'url_key' => $override['url_key'],
            //'visibility' => $override['visibility'],
            //'weight' => $override['weight'],
            'created_at' => $override['created_at'],
            'updated_at' => $override['updated_at'],
        ];
    }

    /**
     * Map attributes to existing format
     *
     * @param array $override
     * @return array
     */
    private function mapAttributes(array $override) {
        $attributes = [];
        foreach ($override['attributes'] as $attribute) {
            if ($attribute['type'] == 'select') {
                $attributes[$attribute['attribute_code']] = $attribute['value'][0]['id'];
            } else if ($attribute['type'] == 'multiselect') {
                $values = [];
                foreach ($attribute['value'] as $attributeValue) {
                    $values[] = $attributeValue['id'];
                }
                $attributes[$attribute['attribute_code']] = implode(',', $values);
            } else if ($attribute['type'] == 'boolean') {
                $attributes[$attribute['attribute_code']] = $attribute['value'][0]['value'] == 'yes' ? 1 : 0;
            } else if ($attribute['type'] == 'text' || $attribute['type'] == 'price') {
                $attributes[$attribute['attribute_code']] = $attribute['value'][0]['value'];
            }
        }
        return $attributes;
    }
}
