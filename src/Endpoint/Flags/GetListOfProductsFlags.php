<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Flags;

use Shoptet\Api\Sdk\Php\Endpoint\Flags\GetListOfProductsFlagsResponse\GetListOfProductsFlagsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/getlistofproductsflags
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
