<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class UrlRewriteArrayMapper
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
    * @param UrlRewrite $dto
    * @return array
    */
    public function convertToArray(UrlRewrite $dto)
    {
        $result = [];
        $result["url"] = $dto->getUrl();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getParameters() as $fieldArrayDto) {
            $fieldData[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\UrlRewriteParameterInterface::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["parameters"] = $fieldArray;
        return $result;
    }
}
