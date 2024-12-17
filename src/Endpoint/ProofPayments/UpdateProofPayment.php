<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentRequest\UpdateProofPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentResponse\UpdateProofPaymentResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/updateproofpayment
 *
 * @method UpdateProofPayment setBody(null|array|UpdateProofPaymentRequest $entity)
 * @method null|UpdateProofPaymentRequest getBody()
 */
class UpdateProofPayment extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateProofPaymentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateProofPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}';
    }
}
