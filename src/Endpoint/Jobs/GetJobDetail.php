<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Jobs;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Jobs\GetJobDetailResponse\GetJobDetailResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Jobs/getjobdetail
 *
 * @method GetJobDetail setBody(null $entity)
 * @method null getBody()
 */
class GetJobDetail extends Get
{
    protected array $supportedPathParams = ['jobId' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetJobDetailResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/jobs/{jobId}';
    }
}
