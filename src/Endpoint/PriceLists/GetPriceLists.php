<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPriceListsResponse\GetPriceListsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/getpricelists
 *
 * @method GetPriceLists setBody(null $entity)
 * @method null getBody()
 */
class GetPriceLists extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetPriceListsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists';
    }
}
