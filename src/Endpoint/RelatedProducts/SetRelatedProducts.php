<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts;

use Shoptet\Api\Sdk\Php\Endpoint\Put;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\SetRelatedProductsRequest\SetRelatedProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\SetRelatedProductsResponse\SetRelatedProductsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Related-products/setrelatedproducts
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
