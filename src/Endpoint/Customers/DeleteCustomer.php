<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerResponse\DeleteCustomerResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomer
 *
 * @method DeleteCustomer setBody(null $entity)
 * @method null getBody()
 */
class DeleteCustomer extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCustomerResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}';
    }
}
