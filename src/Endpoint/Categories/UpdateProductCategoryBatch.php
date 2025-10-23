<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryBatchRequest\UpdateProductCategoryBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryBatchResponse\UpdateProductCategoryBatchResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductcategorybatch
 *
 * @method UpdateProductCategoryBatch setBody(null|array|UpdateProductCategoryBatchRequest $entity)
 * @method null|UpdateProductCategoryBatchRequest getBody()
 */
class UpdateProductCategoryBatch extends Patch implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductCategoryBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductCategoryBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/batch';
    }
}
