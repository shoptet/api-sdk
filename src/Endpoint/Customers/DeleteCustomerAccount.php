<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerAccountResponse\DeleteCustomerAccountResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomeraccount
 *
 * @method DeleteCustomerAccount setBody(null $entity)
 * @method null getBody()
 */
class DeleteCustomerAccount extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'accountGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCustomerAccountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/accounts/{accountGuid}';
    }
}
