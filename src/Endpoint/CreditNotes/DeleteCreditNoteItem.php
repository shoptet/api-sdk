<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNoteItemResponse\DeleteCreditNoteItemResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/deletecreditnoteitem
 *
 * @method DeleteCreditNoteItem setBody(null $entity)
 * @method null getBody()
 */
class DeleteCreditNoteItem extends Delete
{
    protected array $supportedPathParams = ['code' => true, 'id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCreditNoteItemResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}/item/{id}';
    }
}
