<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/getshipmentcarrierdetail
 *
 * @method GetShipmentCarrierDetail setBody(null $entity)
 * @method null getBody()
 */
class GetShipmentCarrierDetail extends Get
{
    protected array $supportedPathParams = ['code' => true, 'type' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetShipmentCarrierDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/carriers/{code}/{type}';
    }
}
