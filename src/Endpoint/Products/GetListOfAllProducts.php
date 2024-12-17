<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProductsResponse\GetListOfAllProductsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofallproducts
 *
 * @method GetListOfAllProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllProducts extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'include' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'visibility' => false,
        'type' => false,
        'brandName' => false,
        'brandCode' => false,
        'defaultCategoryGuid' => false,
        'categoryGuid' => false,
        'flag' => false,
        'supplierGuid' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/snapshot';
    }
}
