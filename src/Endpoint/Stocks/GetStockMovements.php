<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsResponse\GetStockMovementsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/getstockmovements
 *
 * @method GetStockMovements setBody(null $entity)
 * @method null getBody()
 */
class GetStockMovements extends PageableGet
{
    protected array $supportedPathParams = ['stockId' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'lastId' => false,
        'changeTimeFrom' => false,
        'orderCode' => false,
        'include' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetStockMovementsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks/{stockId}/movements';
    }
}
