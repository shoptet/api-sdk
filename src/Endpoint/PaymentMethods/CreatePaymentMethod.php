<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods;

use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodRequest\CreatePaymentMethodRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodResponse\CreatePaymentMethodResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Payment-methods/createpaymentmethod
 *
 * @method CreatePaymentMethod setBody(null|array|CreatePaymentMethodRequest $entity)
 * @method null|CreatePaymentMethodRequest getBody()
 */
class CreatePaymentMethod extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreatePaymentMethodRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreatePaymentMethodResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/payment-methods';
    }
}
