<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups\UpdateCustomerGroupRequest\UpdateCustomerGroupRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerGroups\UpdateCustomerGroupResponse\UpdateCustomerGroupResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-groups/updatecustomergroup
 *
 * @method UpdateCustomerGroup setBody(null|array<string, mixed>|UpdateCustomerGroupRequest $entity)
 * @method null|UpdateCustomerGroupRequest getBody()
 */
class UpdateCustomerGroup extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCustomerGroupRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCustomerGroupResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/groups/{id}';
    }
}
