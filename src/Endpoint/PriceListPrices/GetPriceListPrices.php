<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetPriceListPricesResponse\GetPriceListPricesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-list-prices/getpricelistprices
 *
 * @method GetPriceListPrices setBody(null $entity)
 * @method null getBody()
 */
class GetPriceListPrices extends PageableGet
{
    protected array $supportedPathParams = ['id' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'code' => false,
        'guid' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetPriceListPricesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}/prices';
    }
}
