<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerAccountResponse\GetDetailOfCustomerAccountResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getdetailofcustomeraccount
 *
 * @method GetDetailOfCustomerAccount setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfCustomerAccount extends Get
{
    protected array $supportedPathParams = ['guid' => true, 'accountGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfCustomerAccountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/accounts/{accountGuid}';
    }
}
