<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdateRequest\GetProductImagesUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdateResponse\GetProductImagesUpdateResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getproductimagesupdate
 *
 * @method GetProductImagesUpdate setBody(null|array|GetProductImagesUpdateRequest $entity)
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
