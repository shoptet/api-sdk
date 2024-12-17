<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerDeliveryAddressResponse\DeleteCustomerDeliveryAddressResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomerdeliveryaddress
 *
 * @method DeleteCustomerDeliveryAddress setBody(null $entity)
 * @method null getBody()
 */
class DeleteCustomerDeliveryAddress extends Delete
{
    protected array $supportedPathParams = ['guid' => true, 'addressGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCustomerDeliveryAddressResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/delivery-addresses/{addressGuid}';
    }
}
