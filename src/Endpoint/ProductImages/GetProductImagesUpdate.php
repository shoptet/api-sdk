<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetProductImagesUpdateRequest\GetProductImagesUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetProductImagesUpdateResponse\GetProductImagesUpdateResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/getproductimagesupdate
 *
 * @method GetProductImagesUpdate setBody(null|array<string, mixed>|GetProductImagesUpdateRequest $entity)
 * @method null|GetProductImagesUpdateRequest getBody()
 */
class GetProductImagesUpdate extends Patch
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return GetProductImagesUpdateRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return GetProductImagesUpdateResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}';
    }
}
