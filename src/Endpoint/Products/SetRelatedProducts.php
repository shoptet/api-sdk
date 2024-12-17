<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProductsRequest\SetRelatedProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProductsResponse\SetRelatedProductsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Put;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/setrelatedproducts
 *
 * @method SetRelatedProducts setBody(null|array|SetRelatedProductsRequest $entity)
 * @method null|SetRelatedProductsRequest getBody()
 */
class SetRelatedProducts extends Put
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return SetRelatedProductsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return SetRelatedProductsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/relatedProducts';
    }
}
