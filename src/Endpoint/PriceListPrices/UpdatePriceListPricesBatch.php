<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesBatchRequest\UpdatePriceListPricesBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesBatchResponse\UpdatePriceListPricesBatchResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-list-prices/updatepricelistpricesbatch
 *
 * @method UpdatePriceListPricesBatch setBody(null|array<string, mixed>|UpdatePriceListPricesBatchRequest $entity)
 * @method null|UpdatePriceListPricesBatchRequest getBody()
 */
class UpdatePriceListPricesBatch extends Patch implements AsyncEndpoint
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePriceListPricesBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePriceListPricesBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}/prices/batch';
    }
}
