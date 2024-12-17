<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetailResponse\GetProformaInvoiceDetailResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getproformainvoicedetail
 *
 * @method GetProformaInvoiceDetail setBody(null $entity)
 * @method null getBody()
 */
class GetProformaInvoiceDetail extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProformaInvoiceDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices/{code}';
    }
}
