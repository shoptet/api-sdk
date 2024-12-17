<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/downloadproformainvoicepdf
 *
 * @method DownloadProformaInvoicePdf setBody(null $entity)
 * @method null getBody()
 */
class DownloadProformaInvoicePdf extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): null
    {
        return null;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices/{code}/pdf';
    }
}
