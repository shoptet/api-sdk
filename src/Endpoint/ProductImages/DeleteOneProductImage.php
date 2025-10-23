<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\DeleteOneProductImageResponse\DeleteOneProductImageResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/deleteoneproductimage
 *
 * @method DeleteOneProductImage setBody(null $entity)
 * @method null getBody()
 */
class DeleteOneProductImage extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true, 'imageName' => true];
    protected array $supportedQueryParams = ['language' => false, 'removeReference' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteOneProductImageResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}/{imageName}';
    }
}
