<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemarkRequest\CreateOrderRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemarkResponse\CreateOrderRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/createorderremark
 *
 * @method CreateOrderRemark setBody(null|array|CreateOrderRemarkRequest $entity)
 * @method null|CreateOrderRemarkRequest getBody()
 */
class CreateOrderRemark extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateOrderRemarkRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOrderRemarkResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/history';
    }
}
