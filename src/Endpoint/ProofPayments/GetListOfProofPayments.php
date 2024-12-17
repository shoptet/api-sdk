<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPaymentsResponse\GetListOfProofPaymentsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/getlistofproofpayments
 *
 * @method GetListOfProofPayments setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProofPayments extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'code' => false,
        'orderCode' => false,
        'proformaInvoiceCode' => false,
        'invoiceCode' => false,
        'issueDate' => false,
        'isValid' => false,
        'closed' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProofPaymentsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments';
    }
}
