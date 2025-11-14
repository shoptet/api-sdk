<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\GetListOfCustomerAccountsResponse\GetListOfCustomerAccountsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/getlistofcustomeraccounts
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
