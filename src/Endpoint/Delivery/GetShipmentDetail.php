<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentDetailResponse\GetShipmentDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/getshipmentdetail
 *
 * @method GetShipmentDetail setBody(null $entity)
 * @method null getBody()
 */
class GetShipmentDetail extends Get
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetShipmentDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/{guid}';
    }
}
