<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchDeleteRequest\ProductBatchDeleteRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchDeleteResponse\ProductBatchDeleteResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/productbatchdelete
 *
 * @method ProductBatchDelete setBody(null|array<string, mixed>|ProductBatchDeleteRequest $entity)
 * @method null|ProductBatchDeleteRequest getBody()
 */
class ProductBatchDelete extends Delete implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return ProductBatchDeleteRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProductBatchDeleteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/batch';
    }
}
