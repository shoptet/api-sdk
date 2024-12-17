<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegionsResponse\GetListOfCustomerRegionsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomerregions
 *
 * @method GetListOfCustomerRegions setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCustomerRegions extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCustomerRegionsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/regions';
    }
}
