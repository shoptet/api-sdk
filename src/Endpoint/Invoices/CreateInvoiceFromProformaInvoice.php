<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceRequest\CreateInvoiceFromProformaInvoiceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceResponse\CreateInvoiceFromProformaInvoiceResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/createinvoicefromproformainvoice
 *
 * @method CreateInvoiceFromProformaInvoice setBody(null|array<string, mixed>|CreateInvoiceFromProformaInvoiceRequest $entity)
 * @method null|CreateInvoiceFromProformaInvoiceRequest getBody()
 */
class CreateInvoiceFromProformaInvoice extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'suppressExistenceCheck' => false];

    public function getRequestEntityClass(): string
    {
        return CreateInvoiceFromProformaInvoiceRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateInvoiceFromProformaInvoiceResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices/{code}/invoice';
    }
}
