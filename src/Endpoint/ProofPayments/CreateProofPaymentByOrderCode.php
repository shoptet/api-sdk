<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByOrderCodeResponse\CreateProofPaymentByOrderCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpaymentbyordercode
 *
 * @method CreateProofPaymentByOrderCode setBody(null $entity)
 * @method null getBody()
 */
class CreateProofPaymentByOrderCode extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProofPaymentByOrderCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/order/{code}';
    }
}
