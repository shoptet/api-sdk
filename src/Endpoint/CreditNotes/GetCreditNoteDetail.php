<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetailResponse\GetCreditNoteDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/getcreditnotedetail
 *
 * @method GetCreditNoteDetail setBody(null $entity)
 * @method null getBody()
 */
class GetCreditNoteDetail extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false, 'include' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetCreditNoteDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}';
    }
}
