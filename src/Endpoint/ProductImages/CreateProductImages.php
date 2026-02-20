<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\CreateProductImagesRequest\CreateProductImagesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\CreateProductImagesResponse\CreateProductImagesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/createproductimages
 *
 * @method CreateProductImages setBody(null|array<string, mixed>|CreateProductImagesRequest $entity)
 * @method null|CreateProductImagesRequest getBody()
 */
class CreateProductImages extends Post implements AsyncEndpoint
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
