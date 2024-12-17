<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproducts
 *
 * @method GetListOfProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProducts extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'visibility' => false,
        'type' => false,
        'brandName' => false,
        'brandCode' => false,
        'defaultCategoryGuid' => false,
        'categoryGuid' => false,
        'flag' => false,
        'include' => false,
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
        return GetListOfProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products';
    }
}
