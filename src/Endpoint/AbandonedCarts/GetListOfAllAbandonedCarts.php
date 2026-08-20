<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\AbandonedCarts;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\AbandonedCarts\GetListOfAllAbandonedCartsResponse\GetListOfAllAbandonedCartsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Abandoned-carts/getlistofallabandonedcarts
 *
 * @method GetListOfAllAbandonedCarts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllAbandonedCarts extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'visitTimeFrom' => false, 'visitTimeTo' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllAbandonedCartsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/abandoned-carts/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return AbandonedCartSnapshot::class;
    }
}
