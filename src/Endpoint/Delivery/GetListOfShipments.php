<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentsResponse\GetListOfShipmentsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/getlistofshipments
 *
 * @method GetListOfShipments setBody(null $entity)
 * @method null getBody()
 */
class GetListOfShipments extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'status' => false,
        'orderCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfShipmentsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments';
    }
}
