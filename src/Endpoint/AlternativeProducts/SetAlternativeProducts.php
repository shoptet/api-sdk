<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts;

use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProductsRequest\SetAlternativeProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProductsResponse\SetAlternativeProductsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/setalternativeproducts
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
