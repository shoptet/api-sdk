<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Products\SetAlternativeProductsRequest\SetAlternativeProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetAlternativeProductsResponse\SetAlternativeProductsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/setalternativeproducts
 *
 * @method SetAlternativeProducts setBody(null|array|SetAlternativeProductsRequest $entity)
 * @method null|SetAlternativeProductsRequest getBody()
 */
class SetAlternativeProducts extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return SetAlternativeProductsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return SetAlternativeProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/alternativeProducts';
    }
}
