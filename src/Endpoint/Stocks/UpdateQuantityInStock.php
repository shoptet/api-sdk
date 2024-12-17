<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockResponse\UpdateQuantityInStockResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Stocks/updatequantityinstock
 *
 * @method UpdateQuantityInStock setBody(null|array|UpdateQuantityInStockRequest $entity)
 * @method null|UpdateQuantityInStockRequest getBody()
 */
class UpdateQuantityInStock extends Patch
{
    protected array $supportedPathParams = ['stockId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateQuantityInStockRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateQuantityInStockResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/stocks/{stockId}/movements';
    }
}
