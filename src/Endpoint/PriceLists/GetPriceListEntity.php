<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPriceListEntityResponse\GetPriceListEntityResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/getpricelistentity
 *
 * @method GetPriceListEntity setBody(null $entity)
 * @method null getBody()
 */
class GetPriceListEntity extends Get
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetPriceListEntityResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}';
    }
}
