<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoicesResponse\GetListOfProformaInvoicesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getlistofproformainvoices
 *
 * @method GetListOfProformaInvoices setBody(null $entity)
 * @method null getBody()
 */
class GetListOfProformaInvoices extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'isValid' => false,
        'orderCode' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'varSymbol' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfProformaInvoicesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices';
    }
}
