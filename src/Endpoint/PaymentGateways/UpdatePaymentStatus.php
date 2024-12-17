<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatusRequest\UpdatePaymentStatusRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatusResponse\UpdatePaymentStatusResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Payment-gateways/updatepaymentstatus
 *
 * @method UpdatePaymentStatus setBody(null|array|UpdatePaymentStatusRequest $entity)
 * @method null|UpdatePaymentStatusRequest getBody()
 */
class UpdatePaymentStatus extends Patch
{
    protected array $supportedPathParams = ['paymentCode' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdatePaymentStatusRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdatePaymentStatusResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/payment-status/{paymentCode}';
    }
}
