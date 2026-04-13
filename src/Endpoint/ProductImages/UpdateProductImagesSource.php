<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\UpdateProductImagesSourceRequest\UpdateProductImagesSourceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\UpdateProductImagesSourceResponse\UpdateProductImagesSourceResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/updateproductimagessource
 *
 * @method UpdateProductImagesSource setBody(null|array<string, mixed>|UpdateProductImagesSourceRequest $entity)
 * @method null|UpdateProductImagesSourceRequest getBody()
 */
class UpdateProductImagesSource extends Patch implements AsyncEndpoint
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProductImagesSourceRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProductImagesSourceResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}/source';
    }
}
