<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryRequest\UpdateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryResponse\UpdateProductCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductcategory
 *
 * @method UpdateProductCategory setBody(null|array<string, mixed>|UpdateProductCategoryRequest $entity)
 * @method null|UpdateProductCategoryRequest getBody()
 */
class UpdateProductCategory extends Patch
{
    protected array $supportedPathParams = ['categoryGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories/{categoryGuid}';
    }
}
