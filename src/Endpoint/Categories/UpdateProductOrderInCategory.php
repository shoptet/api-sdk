<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryResponse\UpdateProductOrderInCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductorderincategory
 *
 * @method UpdateProductOrderInCategory setBody(null|array<string, mixed>|UpdateProductOrderInCategoryRequest $entity)
 * @method null|UpdateProductOrderInCategoryRequest getBody()
 */
class UpdateProductOrderInCategory extends Patch
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductOrderInCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductOrderInCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}/productsPriority';
    }
}
