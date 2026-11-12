<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET;

use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetEvidenceUnitsResponse\GetListOfEetEvidenceUnitsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/EET/getlistofeetevidenceunits
 *
 * @method GetListOfEetEvidenceUnits setBody(null $entity)
 * @method null getBody()
 */
class GetListOfEetEvidenceUnits extends Get
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'type' => false,
        'onlyReady' => false,
        'includeDeactivated' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfEetEvidenceUnitsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/eet/evidence-units';
    }
}
