<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailResponse\GetProofPaymentDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetail
 *
 * @method GetProofPaymentDetail setBody(null $entity)
 * @method null getBody()
 */
class GetProofPaymentDetail extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProofPaymentDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}';
    }
}
