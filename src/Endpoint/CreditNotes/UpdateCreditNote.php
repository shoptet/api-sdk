<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteRequest\UpdateCreditNoteRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteResponse\UpdateCreditNoteResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/updatecreditnote
 *
 * @method UpdateCreditNote setBody(null|array|UpdateCreditNoteRequest $entity)
 * @method null|UpdateCreditNoteRequest getBody()
 */
class UpdateCreditNote extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCreditNoteRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCreditNoteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}';
    }
}
