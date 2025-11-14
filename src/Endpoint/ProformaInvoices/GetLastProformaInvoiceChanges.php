<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetLastProformaInvoiceChangesResponse\GetLastProformaInvoiceChangesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/getlastproformainvoicechanges
 *
 * @method GetLastProformaInvoiceChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastProformaInvoiceChanges extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'from' => true,
        'changeType' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastProformaInvoiceChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices/changes';
    }
}
