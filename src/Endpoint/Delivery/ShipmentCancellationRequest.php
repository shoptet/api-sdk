<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/shipmentcancellationrequest
 *
 * @method ShipmentCancellationRequest setBody(null $entity)
 * @method null getBody()
 */
class ShipmentCancellationRequest extends Post
{
    protected array $supportedPathParams = ['guid' => true];
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
        return '/api/shipments/{guid}/cancel-request';
    }
}
