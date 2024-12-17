<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategoryRequest\CreateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategoryResponse\CreateProductCategoryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createproductcategory
 *
 * @method CreateProductCategory setBody(null|array|CreateProductCategoryRequest $entity)
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
