<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerGroupResponse\DeleteCustomerGroupResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/deletecustomergroup
 *
 * @method DeleteCustomerGroup setBody(null $entity)
 * @method null getBody()
 */
class DeleteCustomerGroup extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCustomerGroupResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/groups/{id}';
    }
}
