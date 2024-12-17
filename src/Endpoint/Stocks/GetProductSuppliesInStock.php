<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStockResponse\GetProductSuppliesInStockResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/getproductsuppliesinstock
 *
 * @method GetProductSuppliesInStock setBody(null $entity)
 * @method null getBody()
 */
class GetProductSuppliesInStock extends PageableGet
{
    protected array $supportedPathParams = ['stockId' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'productGuid' => false,
        'code' => false,
        'onlyWithClaim' => false,
        'changedFrom' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProductSuppliesInStockResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks/{stockId}/supplies';
    }
}
