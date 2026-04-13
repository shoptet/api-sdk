<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\CustomerSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfAllCustomersResponse\GetListOfAllCustomersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlistofallcustomers
 *
 * @method GetListOfAllCustomers setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllCustomers extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllCustomersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return CustomerSnapshot::class;
    }
}
