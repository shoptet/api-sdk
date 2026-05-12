<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups\CreateCustomerGroupRequest\CreateCustomerGroupRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups\CreateCustomerGroupResponse\CreateCustomerGroupResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-groups/createcustomergroup
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
