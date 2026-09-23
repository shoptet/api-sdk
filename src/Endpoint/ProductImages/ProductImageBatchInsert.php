<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\ProductImageBatchInsertRequest\ProductImageBatchInsertRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\ProductImageBatchInsertResponse\ProductImageBatchInsertResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/productimagebatchinsert
 *
 * @method ProductImageBatchInsert setBody(null|array<string, mixed>|ProductImageBatchInsertRequest $entity)
 * @method null|ProductImageBatchInsertRequest getBody()
 */
class ProductImageBatchInsert extends Post implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'clearImages' => false];

    public function getRequestEntityClass(): string
    {
        return ProductImageBatchInsertRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProductImageBatchInsertResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/images/batch';
    }
}
