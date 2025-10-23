<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\UpdateCustomerAccountRequest\UpdateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\UpdateCustomerAccountResponse\UpdateCustomerAccountResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/updatecustomeraccount
 *
 * @method UpdateCustomerAccount setBody(null|array|UpdateCustomerAccountRequest $entity)
 * @method null|UpdateCustomerAccountRequest getBody()
 */
class UpdateCustomerAccount extends Patch
{
    protected array $supportedPathParams = ['guid' => true, 'accountGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCustomerAccountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCustomerAccountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/accounts/{accountGuid}';
    }
}
