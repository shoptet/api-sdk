<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderPaymentRequest\UpdateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderPaymentResponse\UpdateOrderPaymentResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/updateorderpayment
 *
 * @method UpdateOrderPayment setBody(null|array|UpdateOrderPaymentRequest $entity)
 * @method null|UpdateOrderPaymentRequest getBody()
 */
class UpdateOrderPayment extends Patch
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderPaymentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/payment/{id}';
    }
}
