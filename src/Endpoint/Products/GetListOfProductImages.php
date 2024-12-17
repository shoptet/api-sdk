<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductImagesResponse\GetListOfProductImagesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductimages
 *
 * @method GetListOfProductImages setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductImages extends Get
{
    protected array $supportedPathParams = ['guid' => true, 'gallery' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductImagesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/{guid}/images/{gallery}';
    }
}
