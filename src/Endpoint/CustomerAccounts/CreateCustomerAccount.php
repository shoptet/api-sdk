<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\CreateCustomerAccountRequest\CreateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\CreateCustomerAccountResponse\CreateCustomerAccountResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/createcustomeraccount
 *
 * @method CreateCustomerAccount setBody(null|array<string, mixed>|CreateCustomerAccountRequest $entity)
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
