<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\GetInformationAboutPaymentResponse\GetInformationAboutPaymentResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Payment-gateways/getinformationaboutpayment
 *
 * @method GetInformationAboutPayment setBody(null $entity)
 * @method null getBody()
 */
class GetInformationAboutPayment extends Get
{
    protected array $supportedPathParams = ['paymentCode' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetInformationAboutPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/payment-status/{paymentCode}';
    }
}
