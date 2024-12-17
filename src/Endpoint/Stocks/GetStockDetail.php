<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockDetailResponse\GetStockDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/getstockdetail
 *
 * @method GetStockDetail setBody(null $entity)
 * @method null getBody()
 */
class GetStockDetail extends Get
{
    protected array $supportedPathParams = ['stockId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetStockDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks/{stockId}';
    }
}
