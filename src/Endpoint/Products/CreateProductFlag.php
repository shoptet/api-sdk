<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlagRequest\CreateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlagResponse\CreateProductFlagResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createproductflag
 *
 * @method CreateProductFlag setBody(null|array|CreateProductFlagRequest $entity)
 * @method null|CreateProductFlagRequest getBody()
 */
class CreateProductFlag extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductFlagRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductFlagResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/flags';
    }
}
