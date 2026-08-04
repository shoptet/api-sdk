<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductImageBatchDeleteRequest\ProductImageBatchDeleteRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductImageBatchDeleteResponse\ProductImageBatchDeleteResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/productimagebatchdelete
 *
 * @method ProductImageBatchDelete setBody(null|array<string, mixed>|ProductImageBatchDeleteRequest $entity)
 * @method null|ProductImageBatchDeleteRequest getBody()
 */
class ProductImageBatchDelete extends Delete implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return ProductImageBatchDeleteRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProductImageBatchDeleteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/images/batch';
    }
}
