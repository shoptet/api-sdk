<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetailResponse\GetCustomerDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getcustomerdetail
 *
 * @method GetCustomerDetail setBody(null $entity)
 * @method null getBody()
 */
class GetCustomerDetail extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetCustomerDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}';
    }
}
