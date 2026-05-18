<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/getlistofshipmentcarriers
 *
 * @method GetListOfShipmentCarriers setBody(null $entity)
 * @method null getBody()
 */
class GetListOfShipmentCarriers extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'type' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfShipmentCarriersResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/carriers';
    }
}
