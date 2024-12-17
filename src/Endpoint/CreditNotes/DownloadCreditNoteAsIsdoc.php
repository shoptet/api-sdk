<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Credit-notes/downloadcreditnoteasisdoc
 *
 * @method DownloadCreditNoteAsIsdoc setBody(null $entity)
 * @method null getBody()
 */
class DownloadCreditNoteAsIsdoc extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): null
    {
        return null;
    }

    public function getEndpoint(): string
    {
        return '/api/credit-notes/{code}/isdoc';
    }
}
