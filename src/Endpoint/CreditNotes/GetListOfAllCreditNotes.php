<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfAllCreditNotesResponse\GetListOfAllCreditNotesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlistofallcreditnotes
 *
 * @method GetListOfAllCreditNotes setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllCreditNotes extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'invoiceCodeFrom' => false,
        'invoiceCodeTo' => false,
        'dueDateFrom' => false,
        'dueDateTo' => false,
        'hasProofPaymentCode' => false,
        'taxDateFrom' => false,
        'taxDateTo' => false,
        'orderCodeFrom' => false,
        'orderCodeTo' => false,
        'customerGuid' => false,
        'varSymbol' => false,
        'restocked' => false,
        'isValid' => false,
        'include' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllCreditNotesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/snapshot';
    }
}
