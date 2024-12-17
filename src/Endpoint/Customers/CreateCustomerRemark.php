<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkResponse\CreateCustomerRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/createcustomerremark
 *
 * @method CreateCustomerRemark setBody(null|array|CreateCustomerRemarkRequest $entity)
 * @method null|CreateCustomerRemarkRequest getBody()
 */
class CreateCustomerRemark extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCustomerRemarkRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCustomerRemarkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/remarks';
    }
}
