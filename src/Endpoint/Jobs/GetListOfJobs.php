<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Jobs;

use Shoptet\Api\Sdk\Php\Endpoint\Jobs\GetListOfJobsResponse\GetListOfJobsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Jobs/getlistofjobs
 *
 * @method GetListOfJobs setBody(null $entity)
 * @method null getBody()
 */
class GetListOfJobs extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'status' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'completionTimeFrom' => false,
        'completionTimeTo' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfJobsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/jobs';
    }
}
