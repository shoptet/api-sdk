<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentShippingOptionsByOrderCodeResponse\GetShipmentShippingOptionsByOrderCodeResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/getshipmentshippingoptionsbyordercode
 *
 * @method GetShipmentShippingOptionsByOrderCode setBody(null $entity)
 * @method null getBody()
 */
class GetShipmentShippingOptionsByOrderCode extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetShipmentShippingOptionsByOrderCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/order/{code}/shipping-options';
    }
}
