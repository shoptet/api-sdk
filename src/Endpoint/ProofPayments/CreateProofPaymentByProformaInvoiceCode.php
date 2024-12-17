<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByProformaInvoiceCodeResponse\CreateProofPaymentByProformaInvoiceCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpaymentbyproformainvoicecode
 *
 * @method CreateProofPaymentByProformaInvoiceCode setBody(null $entity)
 * @method null getBody()
 */
class CreateProofPaymentByProformaInvoiceCode extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProofPaymentByProformaInvoiceCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/proforma-invoice/{code}';
    }
}
