<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotesResponse\GetListOfCreditNotesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlistofcreditnotes
 *
 * @method GetListOfCreditNotes setBody(null $entity)
 * @method null getBody()
 */
class GetListOfCreditNotes extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'isValid' => false,
        'invoiceCode' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'varSymbol' => false,
        'proofPaymentCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfCreditNotesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes';
    }
}
