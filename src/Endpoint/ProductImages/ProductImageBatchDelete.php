<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\ProductImageBatchDeleteRequest\ProductImageBatchDeleteRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\ProductImageBatchDeleteResponse\ProductImageBatchDeleteResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/productimagebatchdelete
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
