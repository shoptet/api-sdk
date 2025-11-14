<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderHistory;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderHistorySnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\GetListOfAllRemarksResponse\GetListOfAllRemarksResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/getlistofallremarks
 *
 * @method GetListOfAllRemarks setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllRemarks extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'orderCodes' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'userId' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllRemarksResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/history/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return OrderHistorySnapshot::class;
    }
}
