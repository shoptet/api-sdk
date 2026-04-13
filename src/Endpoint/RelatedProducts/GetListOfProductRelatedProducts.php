<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\GetListOfProductRelatedProductsResponse\GetListOfProductRelatedProductsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Related-products/getlistofproductrelatedproducts
 *
 * @method GetListOfProductRelatedProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductRelatedProducts extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'visible' => false];

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
