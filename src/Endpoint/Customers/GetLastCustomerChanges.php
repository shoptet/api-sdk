<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetLastCustomerChangesResponse\GetLastCustomerChangesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getlastcustomerchanges
 *
 * @method GetLastCustomerChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastCustomerChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastCustomerChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/changes';
    }
}
