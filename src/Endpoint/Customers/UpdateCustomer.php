<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRequest\UpdateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomer
 *
 * @method UpdateCustomer setBody(null|array|UpdateCustomerRequest $entity)
 * @method null|UpdateCustomerRequest getBody()
 */
class UpdateCustomer extends Patch
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCustomerRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCustomerResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}';
    }
}
