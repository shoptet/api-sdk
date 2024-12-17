<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerAccountRequest\CreateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerAccountResponse\CreateCustomerAccountResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/createcustomeraccount
 *
 * @method CreateCustomerAccount setBody(null|array|CreateCustomerAccountRequest $entity)
 * @method null|CreateCustomerAccountRequest getBody()
 */
class CreateCustomerAccount extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCustomerAccountRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCustomerAccountResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/accounts';
    }
}
