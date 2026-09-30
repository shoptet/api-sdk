<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\UpdateShippingMethodRequest\UpdateShippingMethodRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\UpdateShippingMethodResponse\UpdateShippingMethodResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/updateshippingmethod
 *
 * @method UpdateShippingMethod setBody(null|array<string, mixed>|UpdateShippingMethodRequest $entity)
 * @method null|UpdateShippingMethodRequest getBody()
 */
class UpdateShippingMethod extends Patch
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateShippingMethodRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateShippingMethodResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipping-methods/{guid}';
    }
}
