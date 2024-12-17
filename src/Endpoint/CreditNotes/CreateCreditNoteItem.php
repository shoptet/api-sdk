<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItemRequest\CreateCreditNoteItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItemResponse\CreateCreditNoteItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/createcreditnoteitem
 *
 * @method CreateCreditNoteItem setBody(null|array|CreateCreditNoteItemRequest $entity)
 * @method null|CreateCreditNoteItemRequest getBody()
 */
class CreateCreditNoteItem extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCreditNoteItemRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCreditNoteItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}/item';
    }
}
