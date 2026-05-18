<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentResponse\CreateShipmentResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/createshipment
 *
 * @method CreateShipment setBody(null|array<string, mixed>|CreateShipmentRequest $entity)
 * @method null|CreateShipmentRequest getBody()
 */
class CreateShipment extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateShipmentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateShipmentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments';
    }
}
