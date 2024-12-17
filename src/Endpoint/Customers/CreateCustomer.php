<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest\CreateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerResponse\CreateCustomerResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/createcustomer
 *
 * @method CreateCustomer setBody(null|array|CreateCustomerRequest $entity)
 * @method null|CreateCustomerRequest getBody()
 */
class CreateCustomer extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'suppressMandatoryFieldsCheck' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCustomerRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCustomerResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers';
    }
}
