<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderPayment;

use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\CreateOrderPaymentRequest\CreateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\CreateOrderPaymentResponse\CreateOrderPaymentResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-payment/createorderpayment
 *
 * @method CreateOrderPayment setBody(null|array<string, mixed>|CreateOrderPaymentRequest $entity)
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
