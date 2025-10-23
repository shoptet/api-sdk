<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\InvoiceSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfAllInvoicesResponse\GetListOfAllInvoicesResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/getlistofallinvoices
 *
 * @method GetListOfAllInvoices setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllInvoices extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'include' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'proformaInvoiceCodeFrom' => false,
        'proformaInvoiceCodeTo' => false,
        'dueDateFrom' => false,
        'dueDateTo' => false,
        'taxDateFrom' => false,
        'taxDateTo' => false,
        'orderCodeFrom' => false,
        'orderCodeTo' => false,
        'customerGuid' => false,
        'varSymbol' => false,
        'isValid' => false,
        'hasTaxId' => false,
        'hasVatId' => false,
        'hasCompanyId' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllInvoicesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return InvoiceSnapshot::class;
    }
}
