<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductPriceListPriceSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetAllPriceListPricesSnapshotResponse\GetAllPriceListPricesSnapshotResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-list-prices/getallpricelistpricessnapshot
 *
 * @method GetAllPriceListPricesSnapshot setBody(null $entity)
 * @method null getBody()
 */
class GetAllPriceListPricesSnapshot extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetAllPriceListPricesSnapshotResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/prices/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return ProductPriceListPriceSnapshot::class;
    }
}
