<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class GroupedItemProductInfoArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param GroupedItemProductInfo $dto
    * @return array
    */
    public function convertToArray(GroupedItemProductInfo $dto)
    {
        $result = [];
        $result["sku"] = $dto->getSku();
        $result["name"] = $dto->getName();
        $result["type_id"] = $dto->getTypeId();
        $result["url_key"] = $dto->getUrlKey();
        return $result;
    }
}
