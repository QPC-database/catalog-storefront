<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api;

use Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetResultInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\DeleteProductsRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\DeleteProductsResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\DeleteCategoriesRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\DeleteCategoriesResponseInterface;

/**
 * Autogenerated description for CatalogServerInterface interface
 */
interface CatalogServerInterface
{
    /**
     * Autogenerated description for getProducts interface method
     *
     * @param ProductsGetRequestInterface $request
     * @return ProductsGetResultInterface
     * @throws \Throwable
     */
    public function getProducts(ProductsGetRequestInterface $request): ProductsGetResultInterface;

    /**
     * Autogenerated description for importProducts interface method
     *
     * @param ImportProductsRequestInterface $request
     * @return ImportProductsResponseInterface
     * @throws \Throwable
     */
    public function importProducts(ImportProductsRequestInterface $request): ImportProductsResponseInterface;

    /**
     * Autogenerated description for deleteProducts interface method
     *
     * @param DeleteProductsRequestInterface $request
     * @return DeleteProductsResponseInterface
     * @throws \Throwable
     */
    public function deleteProducts(DeleteProductsRequestInterface $request): DeleteProductsResponseInterface;

    /**
     * Autogenerated description for importCategories interface method
     *
     * @param ImportCategoriesRequestInterface $request
     * @return ImportCategoriesResponseInterface
     * @throws \Throwable
     */
    public function importCategories(ImportCategoriesRequestInterface $request): ImportCategoriesResponseInterface;

    /**
     * Autogenerated description for getCategories interface method
     *
     * @param CategoriesGetRequestInterface $request
     * @return CategoriesGetResponseInterface
     * @throws \Throwable
     */
    public function getCategories(CategoriesGetRequestInterface $request): CategoriesGetResponseInterface;

    /**
     * Autogenerated description for deleteCategories interface method
     *
     * @param DeleteCategoriesRequestInterface $request
     * @return DeleteCategoriesResponseInterface
     */
    public function deleteCategories(DeleteCategoriesRequestInterface $request): DeleteCategoriesResponseInterface;
}
