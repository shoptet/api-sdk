<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRemarksResponse\GetListOfCustomerRemarksResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomerremarks
 *
 * @method GetListOfCustomerRemarks setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCustomerRemarks extends PageableGet
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCustomerRemarksResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/remarks';
    }
}
