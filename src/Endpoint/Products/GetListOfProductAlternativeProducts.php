<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductAlternativeProductsResponse\GetListOfProductAlternativeProductsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductalternativeproducts
 *
 * @method GetListOfProductAlternativeProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductAlternativeProducts extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductAlternativeProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/alternativeProducts';
    }
}
