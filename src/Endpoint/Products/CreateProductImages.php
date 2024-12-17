<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductImagesRequest\CreateProductImagesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductImagesResponse\CreateProductImagesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createproductimages
 *
 * @method CreateProductImages setBody(null|array|CreateProductImagesRequest $entity)
 * @method null|CreateProductImagesRequest getBody()
 */
class CreateProductImages extends Post
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProductImagesRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProductImagesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}';
    }
}
