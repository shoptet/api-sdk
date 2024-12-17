<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocksResponse\GetListOfStocksResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/getlistofstocks
 *
 * @method GetListOfStocks setBody(null $entity)
 * @method null getBody()
 */
class GetListOfStocks extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfStocksResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks';
    }
}
