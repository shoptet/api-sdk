<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByOrderCodeResponse\GetProofPaymentDetailByOrderCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetailbyordercode
 *
 * @method GetProofPaymentDetailByOrderCode setBody(null $entity)
 * @method null getBody()
 */
class GetProofPaymentDetailByOrderCode extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProofPaymentDetailByOrderCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/order/{code}';
    }
}
