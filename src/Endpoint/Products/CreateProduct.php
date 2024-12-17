<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductResponse\CreateProductResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createproduct
 *
 * @method CreateProduct setBody(null|array|CreateProductRequest $entity)
 * @method null|CreateProductRequest getBody()
 */
class CreateProduct extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products';
    }
}
