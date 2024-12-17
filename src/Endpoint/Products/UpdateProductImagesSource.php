<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductImagesSourceRequest\UpdateProductImagesSourceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductImagesSourceResponse\UpdateProductImagesSourceResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateproductimagessource
 *
 * @method UpdateProductImagesSource setBody(null|array|UpdateProductImagesSourceRequest $entity)
 * @method null|UpdateProductImagesSourceRequest getBody()
 */
class UpdateProductImagesSource extends Patch
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
