<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteAllProductImagesInGalleryResponse\DeleteAllProductImagesInGalleryResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteallproductimagesingallery
 *
 * @method DeleteAllProductImagesInGallery setBody(null $entity)
 * @method null getBody()
 */
class DeleteAllProductImagesInGallery extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true];
    protected array $supportedQueryParams = ['language' => false, 'removeReference' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteAllProductImagesInGalleryResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}';
    }
}
