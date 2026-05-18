<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/closecarriershipments
 *
 * @method CloseCarrierShipments setBody(null $entity)
 * @method null getBody()
 */
class CloseCarrierShipments extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): null
    {
        return null;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/carriers/{code}/close';
    }
}
