<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistBatchRequest\UpdatePricelistBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistBatchResponse\UpdatePricelistBatchResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/updatepricelistbatch
 *
 * @method UpdatePricelistBatch setBody(null|array<string, mixed>|UpdatePricelistBatchRequest $entity)
 * @method null|UpdatePricelistBatchRequest getBody()
 */
class UpdatePricelistBatch extends Patch implements AsyncEndpoint
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePricelistBatchRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePricelistBatchResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/pricelists/{id}/batch';
    }
}
