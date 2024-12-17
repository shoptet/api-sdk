<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\DeletePaymentMethodResponse\DeletePaymentMethodResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Payment-methods/deletepaymentmethod
 *
 * @method DeletePaymentMethod setBody(null $entity)
 * @method null getBody()
 */
class DeletePaymentMethod extends Delete
{
    protected array $supportedPathParams = ['guid' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeletePaymentMethodResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/payment-methods/{guid}';
    }
}
