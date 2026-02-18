<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderRequest\CreateProformaInvoiceFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderResponse\CreateProformaInvoiceFromOrderResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/createproformainvoicefromorder
 *
 * @method CreateProformaInvoiceFromOrder setBody(null|array|CreateProformaInvoiceFromOrderRequest $entity)
 * @method null|CreateProformaInvoiceFromOrderRequest getBody()
 */
class CreateProformaInvoiceFromOrder extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'suppressExistenceCheck' => false];

    public function getRequestEntityClass(): string
    {
        return CreateProformaInvoiceFromOrderRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateProformaInvoiceFromOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api_orders_{code}_proforma-invoice.yaml';
    }
}
