<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesRequest\UpdatePriceListPricesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesResponse\UpdatePriceListPricesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-list-prices/updatepricelistprices
 *
 * @method UpdatePriceListPrices setBody(null|array<string, mixed>|UpdatePriceListPricesRequest $entity)
 * @method null|UpdatePriceListPricesRequest getBody()
 */
class UpdatePriceListPrices extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePriceListPricesRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePriceListPricesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}/prices';
    }
}
