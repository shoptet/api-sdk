<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices;

use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoicesResponse\GetListOfInvoicesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Invoices/getlistofinvoices
 *
 * @method GetListOfInvoices setBody(null $entity)
 * @method null getBody()
 */
class GetListOfInvoices extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'isValid' => false,
        'proformaInvoiceCode' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'taxDateFrom' => false,
        'orderCode' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'varSymbol' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfInvoicesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices';
    }
}
