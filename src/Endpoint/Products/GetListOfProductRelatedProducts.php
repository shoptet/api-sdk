<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductRelatedProductsResponse\GetListOfProductRelatedProductsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductrelatedproducts
 *
 * @method GetListOfProductRelatedProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductRelatedProducts extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductRelatedProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/relatedProducts';
    }
}
