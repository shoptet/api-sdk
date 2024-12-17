<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethodsResponse\GetListingOfPaymentMethodsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Payment-methods/getlistingofpaymentmethods
 *
 * @method GetListingOfPaymentMethods setBody(null $entity)
 * @method null getBody()
 */
class GetListingOfPaymentMethods extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListingOfPaymentMethodsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/payment-methods';
    }
}
