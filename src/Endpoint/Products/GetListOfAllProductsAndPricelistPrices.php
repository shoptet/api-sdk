<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductPricelistSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProductsAndPricelistPricesResponse\GetListOfAllProductsAndPricelistPricesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getlistofallproductsandpricelistprices
 *
 * @method GetListOfAllProductsAndPricelistPrices setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllProductsAndPricelistPrices extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllProductsAndPricelistPricesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/snapshot/pricelists';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return ProductPricelistSnapshot::class;
    }
}
