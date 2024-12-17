<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyResponse\ProductCopyResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/productcopy
 *
 * @method ProductCopy setBody(null|array|ProductCopyRequest $entity)
 * @method null|ProductCopyRequest getBody()
 */
class ProductCopy extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return ProductCopyRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProductCopyResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/copy';
    }
}
