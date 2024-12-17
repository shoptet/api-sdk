<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGiftRequest\CreateProductGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGiftResponse\CreateProductGiftResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createproductgift
 *
 * @method CreateProductGift setBody(null|array|CreateProductGiftRequest $entity)
 * @method null|CreateProductGiftRequest getBody()
 */
class CreateProductGift extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductGiftRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductGiftResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/gifts';
    }
}
