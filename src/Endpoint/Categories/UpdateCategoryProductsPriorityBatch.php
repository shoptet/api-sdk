<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateCategoryProductsPriorityBatchRequest\UpdateCategoryProductsPriorityBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateCategoryProductsPriorityBatchResponse\UpdateCategoryProductsPriorityBatchResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updatecategoryproductsprioritybatch
 *
 * @method UpdateCategoryProductsPriorityBatch setBody(null|array|UpdateCategoryProductsPriorityBatchRequest $entity)
 * @method null|UpdateCategoryProductsPriorityBatchRequest getBody()
 */
class UpdateCategoryProductsPriorityBatch extends Patch implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCategoryProductsPriorityBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCategoryProductsPriorityBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/products-priority/batch';
    }
}
