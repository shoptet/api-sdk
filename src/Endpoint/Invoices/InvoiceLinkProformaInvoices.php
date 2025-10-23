<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoicesRequest\InvoiceLinkProformaInvoicesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoicesResponse\InvoiceLinkProformaInvoicesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/invoicelinkproformainvoices
 *
 * @method InvoiceLinkProformaInvoices setBody(null|array|InvoiceLinkProformaInvoicesRequest $entity)
 * @method null|InvoiceLinkProformaInvoicesRequest getBody()
 */
class InvoiceLinkProformaInvoices extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return InvoiceLinkProformaInvoicesRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return InvoiceLinkProformaInvoicesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/{code}/link-proforma-invoice';
    }
}
