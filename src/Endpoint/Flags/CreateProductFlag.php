<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Flags;

use Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlagRequest\CreateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlagResponse\CreateProductFlagResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/createproductflag
 *
 * @method CreateProductFlag setBody(null|array<string, mixed>|CreateProductFlagRequest $entity)
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
