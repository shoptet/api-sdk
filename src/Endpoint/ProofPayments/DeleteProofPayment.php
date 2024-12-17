<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DeleteProofPaymentResponse\DeleteProofPaymentResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/deleteproofpayment
 *
 * @method DeleteProofPayment setBody(null $entity)
 * @method null getBody()
 */
class DeleteProofPayment extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteProofPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}';
    }
}
