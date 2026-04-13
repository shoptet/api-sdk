<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories;

use Shoptet\Api\Sdk\Php\Endpoint\Categories\CreateProductCategoryRequest\CreateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\CreateProductCategoryResponse\CreateProductCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/createproductcategory
 *
 * @method CreateProductCategory setBody(null|array<string, mixed>|CreateProductCategoryRequest $entity)
 * @method null|CreateProductCategoryRequest getBody()
 */
class CreateProductCategory extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/categories';
    }
}
