<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerDeliveryAddressRequest\UpdateCustomerDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerDeliveryAddressResponse\UpdateCustomerDeliveryAddressResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomerdeliveryaddress
 *
 * @method UpdateCustomerDeliveryAddress setBody(null|array|UpdateCustomerDeliveryAddressRequest $entity)
 * @method null|UpdateCustomerDeliveryAddressRequest getBody()
 */
class UpdateCustomerDeliveryAddress extends Patch
{
    protected array $supportedPathParams = ['guid' => true, 'addressGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCustomerDeliveryAddressRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCustomerDeliveryAddressResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/delivery-addresses/{addressGuid}';
    }
}
