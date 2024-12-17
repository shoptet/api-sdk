<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/downloadinvoiceasisdoc
 *
 * @method DownloadInvoiceAsIsdoc setBody(null $entity)
 * @method null getBody()
 */
class DownloadInvoiceAsIsdoc extends Get
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
        return '/api/invoices/{code}/isdoc';
    }
}
