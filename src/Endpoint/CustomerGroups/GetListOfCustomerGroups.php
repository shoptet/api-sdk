<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups\GetListOfCustomerGroupsResponse\GetListOfCustomerGroupsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-groups/getlistofcustomergroups
 *
 * @method GetListOfCustomerGroups setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCustomerGroups extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCustomerGroupsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/groups';
    }
}
