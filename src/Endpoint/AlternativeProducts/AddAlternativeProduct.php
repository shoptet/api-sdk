<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts;

use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProductRequest\AddAlternativeProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProductResponse\AddAlternativeProductResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/addalternativeproduct
 *
 * @method AddAlternativeProduct setBody(null|array<string, mixed>|AddAlternativeProductRequest $entity)
 * @method null|AddAlternativeProductRequest getBody()
 */
class AddAlternativeProduct extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return AddAlternativeProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return AddAlternativeProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/alternativeProducts';
    }
}
