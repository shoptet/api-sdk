<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceResponse\CreateCreditNoteFromInvoiceResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/createcreditnotefrominvoice
 *
 * @method CreateCreditNoteFromInvoice setBody(null|array|CreateCreditNoteFromInvoiceRequest $entity)
 * @method null|CreateCreditNoteFromInvoiceRequest getBody()
 */
class CreateCreditNoteFromInvoice extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCreditNoteFromInvoiceRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCreditNoteFromInvoiceResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/invoices/{code}/credit-note';
    }
}
