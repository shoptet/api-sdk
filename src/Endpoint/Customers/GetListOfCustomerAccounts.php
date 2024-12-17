<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerAccountsResponse\GetListOfCustomerAccountsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomeraccounts
 *
 * @method GetListOfCustomerAccounts setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCustomerAccounts extends PageableGet
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCustomerAccountsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/accounts';
    }
}
