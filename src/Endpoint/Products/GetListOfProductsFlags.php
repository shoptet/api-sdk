<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsFlagsResponse\GetListOfProductsFlagsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsflags
 *
 * @method GetListOfProductsFlags setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProductsFlags extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProductsFlagsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/flags';
    }
}
