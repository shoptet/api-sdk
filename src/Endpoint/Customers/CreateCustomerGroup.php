<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerGroupRequest\CreateCustomerGroupRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerGroupResponse\CreateCustomerGroupResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/createcustomergroup
 *
 * @method CreateCustomerGroup setBody(null|array<string, mixed>|CreateCustomerGroupRequest $entity)
 * @method null|CreateCustomerGroupRequest getBody()
 */
class CreateCustomerGroup extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCustomerGroupRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCustomerGroupResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/groups';
    }
}
