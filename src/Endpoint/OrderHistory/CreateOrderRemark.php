<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderHistory;

use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemarkRequest\CreateOrderRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemarkResponse\CreateOrderRemarkResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/createorderremark
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
