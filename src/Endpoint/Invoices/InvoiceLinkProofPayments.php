<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsResponse\InvoiceLinkProofPaymentsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/invoicelinkproofpayments
 *
 * @method InvoiceLinkProofPayments setBody(null|array|InvoiceLinkProofPaymentsRequest $entity)
 * @method null|InvoiceLinkProofPaymentsRequest getBody()
 */
class InvoiceLinkProofPayments extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return InvoiceLinkProofPaymentsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return InvoiceLinkProofPaymentsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/{code}/link-proof-payment';
    }
}
