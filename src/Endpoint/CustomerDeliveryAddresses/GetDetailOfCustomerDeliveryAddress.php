<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\GetDetailOfCustomerDeliveryAddressResponse\GetDetailOfCustomerDeliveryAddressResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/getdetailofcustomerdeliveryaddress
 *
 * @method GetDetailOfCustomerDeliveryAddress setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfCustomerDeliveryAddress extends Get
{
    protected array $supportedPathParams = ['guid' => true, 'addressGuid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfCustomerDeliveryAddressResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/delivery-addresses/{addressGuid}';
    }
}
