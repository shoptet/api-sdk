<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetLastCreditNoteChangesResponse\GetLastCreditNoteChangesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlastcreditnotechanges
 *
 * @method GetLastCreditNoteChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastCreditNoteChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastCreditNoteChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/changes';
    }
}
