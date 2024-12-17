<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPaymentRequest\CreateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPaymentResponse\CreateOrderPaymentResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/createorderpayment
 *
 * @method CreateOrderPayment setBody(null|array|CreateOrderPaymentRequest $entity)
 * @method null|CreateOrderPaymentRequest getBody()
 */
class CreateOrderPayment extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateOrderPaymentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateOrderPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/payment';
    }
}
