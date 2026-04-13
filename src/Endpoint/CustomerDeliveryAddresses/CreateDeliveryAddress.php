<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses;

use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\CreateDeliveryAddressRequest\CreateDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\CreateDeliveryAddressResponse\CreateDeliveryAddressResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/createdeliveryaddress
 *
 * @method CreateDeliveryAddress setBody(null|array<string, mixed>|CreateDeliveryAddressRequest $entity)
 * @method null|CreateDeliveryAddressRequest getBody()
 */
class CreateDeliveryAddress extends Post
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateDeliveryAddressRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateDeliveryAddressResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/{guid}/delivery-addresses';
    }
}
