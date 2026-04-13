<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscountSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfAllQuantityDiscountsResponse\GetListOfAllQuantityDiscountsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/getlistofallquantitydiscounts
 *
 * @method GetListOfAllQuantityDiscounts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllQuantityDiscounts extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'customerGroupCode' => false,
        'validFrom' => false,
        'validTo' => false,
        'status' => false,
        'isActive' => false,
        'includeUnregisteredCustomers' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllQuantityDiscountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/quantity-discounts/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return QuantityDiscountSnapshot::class;
    }
}
