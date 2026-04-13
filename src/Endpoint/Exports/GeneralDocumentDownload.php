<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Exports;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Exports\GeneralDocumentDownloadResponse\GeneralDocumentDownloadResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Exports/generaldocumentdownload
 *
 * @method GeneralDocumentDownload setBody(null $entity)
 * @method null getBody()
 */
class GeneralDocumentDownload extends Get implements AsyncEndpoint
{
    protected array $supportedPathParams = ['type' => true, 'format' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'currency' => false,
        'codeFrom' => false,
        'codeTo' => false,
        'dateFrom' => false,
        'dateTo' => false,
        'taxDateFrom' => false,
        'taxDateTo' => false,
        'include' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GeneralDocumentDownloadResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/export/{type}/{format}';
    }
}
