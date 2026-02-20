<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories;

use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryRequest\CreateParametricCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryResponse\CreateParametricCategoryResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/createparametriccategory
 *
 * @method CreateParametricCategory setBody(null|array<string, mixed>|CreateParametricCategoryRequest $entity)
 * @method null|CreateParametricCategoryRequest getBody()
 */
class CreateParametricCategory extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return CreateParametricCategoryRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateParametricCategoryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/parametric-categories';
    }
}
