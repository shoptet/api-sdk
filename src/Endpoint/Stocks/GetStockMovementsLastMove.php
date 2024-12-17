<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsLastMoveResponse\GetStockMovementsLastMoveResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/getstockmovementslastmove
 *
 * @method GetStockMovementsLastMove setBody(null $entity)
 * @method null getBody()
 */
class GetStockMovementsLastMove extends Get
{
    protected array $supportedPathParams = ['stockId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetStockMovementsLastMoveResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks/{stockId}/movements/last';
    }
}
