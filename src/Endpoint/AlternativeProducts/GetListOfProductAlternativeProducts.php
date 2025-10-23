<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts;

use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\GetListOfProductAlternativeProductsResponse\GetListOfProductAlternativeProductsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/getlistofproductalternativeproducts
 *
 * @method GetListOfProductAlternativeProducts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductAlternativeProducts extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'visible' => false];

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
