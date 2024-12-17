<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetLastInvoiceChangesResponse\GetLastInvoiceChangesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/getlastinvoicechanges
 *
 * @method GetLastInvoiceChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastInvoiceChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastInvoiceChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/changes';
    }
}
