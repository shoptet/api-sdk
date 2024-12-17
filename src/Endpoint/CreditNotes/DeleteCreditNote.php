<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNoteResponse\DeleteCreditNoteResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/deletecreditnote
 *
 * @method DeleteCreditNote setBody(null $entity)
 * @method null getBody()
 */
class DeleteCreditNote extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteCreditNoteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}';
    }
}
