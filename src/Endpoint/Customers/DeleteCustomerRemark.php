<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerRemarkResponse\DeleteCustomerRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomerremark
 *
 * @method DeleteCustomerRemark setBody(null $entity)
 * @method null getBody()
 */
class DeleteCustomerRemark extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCustomerRemarkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/remarks/{id}';
    }
}
