<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET;

use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/EET/getlistofeetrecords
 *
 * @method GetListOfEetRecords setBody(null $entity)
 * @method null getBody()
 */
class GetListOfEetRecords extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'receiptedAtFrom' => false,
        'receiptedAtTo' => false,
        'states' => false,
        'source' => false,
        'evidenceUnitId' => false,
        'deviceId' => false,
        'paymentMethodGuid' => false,
        'adminUserId' => false,
        'orderCode' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfEetRecordsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eet/records';
    }
}
