<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemRequest\UpdateCreditNoteItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemResponse\UpdateCreditNoteItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/updatecreditnoteitem
 *
 * @method UpdateCreditNoteItem setBody(null|array|UpdateCreditNoteItemRequest $entity)
 * @method null|UpdateCreditNoteItemRequest getBody()
 */
class UpdateCreditNoteItem extends Patch
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateCreditNoteItemRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateCreditNoteItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}/item/{id}';
    }
}
