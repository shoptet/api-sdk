<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProductRequest\AddRelatedProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProductResponse\AddRelatedProductResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/addrelatedproduct
 *
 * @method AddRelatedProduct setBody(null|array|AddRelatedProductRequest $entity)
 * @method null|AddRelatedProductRequest getBody()
 */
class AddRelatedProduct extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return AddRelatedProductRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return AddRelatedProductResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/relatedProducts';
    }
}
