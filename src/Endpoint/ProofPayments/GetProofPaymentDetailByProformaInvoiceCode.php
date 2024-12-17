<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByProformaInvoiceCodeResponse\GetProofPaymentDetailByProformaInvoiceCodeResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetailbyproformainvoicecode
 *
 * @method GetProofPaymentDetailByProformaInvoiceCode setBody(null $entity)
 * @method null getBody()
 */
class GetProofPaymentDetailByProformaInvoiceCode extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProofPaymentDetailByProformaInvoiceCodeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/proforma-invoice/{code}';
    }
}
