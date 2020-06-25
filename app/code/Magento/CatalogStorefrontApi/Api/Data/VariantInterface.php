<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for Variant interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface VariantInterface
{
    /**
     * Autogenerated description for getProduct() interface method
     *
     * @return string
     */
    public function getProduct(): string;

    /**
     * Autogenerated description for setProduct() interface method
     *
     * @param string $value
     * @return void
     */
    public function setProduct(string $value): void;

    /**
     * Autogenerated description for getAttributes() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\VariantAttributeInterface[]
     */
    public function getAttributes(): array;

    /**
     * Autogenerated description for setAttributes() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\VariantAttributeInterface[] $value
     * @return void
     */
    public function setAttributes(array $value): void;
}
