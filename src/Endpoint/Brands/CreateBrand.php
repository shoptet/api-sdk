<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands;

use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandResponse\CreateBrandResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Brands/createbrand
 *
 * @method CreateBrand setBody(null|array|CreateBrandRequest $entity)
 * @method null|CreateBrandRequest getBody()
 */
class CreateBrand extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateBrandRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateBrandResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/brands';
    }
}
