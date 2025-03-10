<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\ProformaInvoice;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfAllProformaInvoicesResponse\GetListOfAllProformaInvoicesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getlistofallproformainvoices
 *
 * @method GetListOfAllProformaInvoices setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllProformaInvoices extends Get implements SnapshotEndpoint
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
        'isValid' => false,
        'paid' => false,
        'currencyCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllProformaInvoicesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proforma-invoices/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return ProformaInvoice::class;
    }
}
