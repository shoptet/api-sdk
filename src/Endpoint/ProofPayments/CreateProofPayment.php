<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentRequest\CreateProofPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentResponse\CreateProofPaymentResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpayment
 *
 * @method CreateProofPayment setBody(null|array|CreateProofPaymentRequest $entity)
 * @method null|CreateProofPaymentRequest getBody()
 */
class CreateProofPayment extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProofPaymentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProofPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments';
    }
}
