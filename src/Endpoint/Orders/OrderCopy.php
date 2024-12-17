<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest\OrderCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyResponse\OrderCopyResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/ordercopy
 *
 * @method OrderCopy setBody(null|array|OrderCopyRequest $entity)
 * @method null|OrderCopyRequest getBody()
 */
class OrderCopy extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return OrderCopyRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return OrderCopyResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/copy';
    }
}
