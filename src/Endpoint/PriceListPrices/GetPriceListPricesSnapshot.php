<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListPriceSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetPriceListPricesSnapshotResponse\GetPriceListPricesSnapshotResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-list-prices/getpricelistpricessnapshot
 *
 * @method GetPriceListPricesSnapshot setBody(null $entity)
 * @method null getBody()
 */
class GetPriceListPricesSnapshot extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = ['id' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'actionPriceDateFrom' => false,
        'actionPriceDateTo' => false,
        'vatRate' => false,
        'currencyCode' => false,
        'orderableMinAmount' => false,
        'orderableMinAmountFrom' => false,
        'orderableMinAmountTo' => false,
        'orderableMaxAmount' => false,
        'orderableMaxAmountFrom' => false,
        'orderableMaxAmountTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetPriceListPricesSnapshotResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/price-lists/{id}/prices/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return PriceListPriceSnapshot::class;
    }
}
