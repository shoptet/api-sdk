<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\GeListOfCustomerDeliveryAddressesResponse\GeListOfCustomerDeliveryAddressesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/gelistofcustomerdeliveryaddresses
 *
 * @method GeListOfCustomerDeliveryAddresses setBody(null $entity)
 * @method null getBody()
 */
class GeListOfCustomerDeliveryAddresses extends PageableGet
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GeListOfCustomerDeliveryAddressesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/delivery-addresses';
    }
}
