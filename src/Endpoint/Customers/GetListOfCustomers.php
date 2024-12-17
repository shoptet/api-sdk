<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomersResponse\GetListOfCustomersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomers
 *
 * @method GetListOfCustomers setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCustomers extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'email' => false,
        'phone' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCustomersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers';
    }
}
