<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductRequest\AddAlternativeProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductResponse\AddAlternativeProductResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/addalternativeproduct
 *
 * @method AddAlternativeProduct setBody(null|array|AddAlternativeProductRequest $entity)
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
