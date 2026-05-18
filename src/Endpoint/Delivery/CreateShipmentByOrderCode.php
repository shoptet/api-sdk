<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery;

use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentByOrderCodeResponse\CreateShipmentByOrderCodeResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery/createshipmentbyordercode
 *
 * @method CreateShipmentByOrderCode setBody(null $entity)
 * @method null getBody()
 */
class CreateShipmentByOrderCode extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return CreateShipmentByOrderCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/shipments/order/{code}';
    }
}
