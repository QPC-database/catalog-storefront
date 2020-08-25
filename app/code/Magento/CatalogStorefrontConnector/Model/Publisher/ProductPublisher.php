<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogStorefrontConnector\Model\Publisher;

use Magento\CatalogExtractor\DataProvider\DataProviderInterface;
use Magento\CatalogStorefrontApi\Api\CatalogServerInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterfaceFactory;
use Magento\Framework\App\State;
use Psr\Log\LoggerInterface;
use Magento\CatalogMessageBroker\Model\ProductDataProcessor;

/**
 * Product publisher
 *
 * Push product data for given product ids and store id to the Storefront via Import API
 * TODO: move to CatalogMessageBroker module
 */
class ProductPublisher
{
    /**
     * @var DataProviderInterface
     */
    private $productsDataProvider;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var State
     */
    private $state;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var CatalogServerInterface
     */
    private $catalogServer;

    /**
     * @var ImportProductsRequestInterfaceFactory
     */
    private $importProductsRequestInterfaceFactory;

    /**
     * @var ProductDataProcessor
     */
    private $productDataProcessor;

    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ProductMapper
     */
    private $productMapper;

    /**
     * @param DataProviderInterface $productsDataProvider
     * @param State $state
     * @param LoggerInterface $logger
     * @param CatalogServerInterface $catalogServer
     * @param ImportProductsRequestInterfaceFactory $importProductsRequestInterfaceFactory
     * @param ProductDataProcessor $productDataProcessor
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductMapper $productMapper
     * @param int $batchSize
     */
    public function __construct(
        DataProviderInterface $productsDataProvider,
        State $state,
        LoggerInterface $logger,
        CatalogServerInterface $catalogServer,
        ImportProductsRequestInterfaceFactory $importProductsRequestInterfaceFactory,
        ProductDataProcessor $productDataProcessor,
        \Magento\CatalogStorefrontApi\Api\Data\ProductMapper $productMapper,
        int $batchSize
    ) {
        $this->productsDataProvider = $productsDataProvider;
        $this->batchSize = $batchSize;
        $this->state = $state;
        $this->logger = $logger;
        $this->catalogServer = $catalogServer;
        $this->importProductsRequestInterfaceFactory = $importProductsRequestInterfaceFactory;
        $this->productDataProcessor = $productDataProcessor;
        $this->productMapper = $productMapper;
    }

    /**
     * Publish data to Storefront directly
     *
     * @param array $productIds
     * @param string $storeCode
     * @param array $overrideProducts Temporary variables to support transition period between new and old Export API
     *
     * @return void
     *
     * @throws \Exception
     * @deprecated
     */
    public function publish(array $productIds, string $storeCode, $overrideProducts = []): void
    {
        $this->state->emulateAreaCode(
            \Magento\Framework\App\Area::AREA_FRONTEND,
            function () use ($productIds, $storeCode, $overrideProducts) {
                try {
                    $this->publishEntities($productIds, $storeCode, $overrideProducts);
                } catch (\Throwable $e) {
                    $this->logger->critical(
                        \sprintf(
                            'Error on publish product ids "%s" in store %s',
                            \implode(', ', $productIds),
                            $storeCode
                        ),
                        ['exception' => $e]
                    );
                }
            }
        );
    }

    /**
     * Publish entities to the queue
     *
     * @param array $productIds
     * @param string $storeCode
     * @param array $overrideProducts
     *
     * @return void
     */
    private function publishEntities(array $productIds, string $storeCode, $overrideProducts = []): void
    {
        foreach (\array_chunk($productIds, $this->batchSize) as $idsBunch) {
            // @todo eliminate calling old API when new API can provide all of the necessary data
            $productsData = $this->productsDataProvider->fetch($idsBunch, [], ['store' => $storeCode]);
            $this->logger->debug(
                \sprintf('Publish products with ids "%s" in store %s', \implode(', ', $productIds), $storeCode),
                ['verbose' => $productsData]
            );
            if (count($productsData)) {
                $this->importProducts($storeCode, array_values($productsData), $overrideProducts);
            }
        }
    }

    /**
     * Import products into product storage.
     *
     * @param string $storeCode
     * @param array $products
     * @param array $overrideProducts
     *
     * @throws \Throwable
     */
    private function importProducts(string $storeCode, array $products, $overrideProducts = []): void
    {
        $newApiProducts = [];
        foreach ($overrideProducts as $product) {
            $newApiProducts[$product['product_id']] = $product;
        }

        foreach ($products as &$product) {
            if (isset($newApiProducts[$product['entity_id']])) {
                $product = $this->productDataProcessor->merge($newApiProducts[$product['entity_id']], $product);
            }
            // be sure, that data passed to Import API in the expected format
            $product = $this->productMapper->setData($product)->build();
        }
        unset($product);

        /** @var ImportProductsRequestInterface $importProductRequest */
        $importProductRequest = $this->importProductsRequestInterfaceFactory->create();
        $importProductRequest->setProducts($products);
        $importProductRequest->setStore($storeCode);
        $importResult = $this->catalogServer->importProducts($importProductRequest);
        if ($importResult->getStatus() === false) {
            $this->logger->error(sprintf('Products import is failed: "%s"', $importResult->getMessage()));
        }
    }
}
