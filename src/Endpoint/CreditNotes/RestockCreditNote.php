<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\RestockCreditNoteResponse\RestockCreditNoteResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/restockcreditnote
 *
 * @method RestockCreditNote setBody(null $entity)
 * @method null getBody()
 */
class RestockCreditNote extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return RestockCreditNoteResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}/restock';
    }
}
