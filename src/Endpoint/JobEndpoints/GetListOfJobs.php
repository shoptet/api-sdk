<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints;

use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobsResponse\GetListOfJobsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;

/**
 * @see https://api.docs.shoptet.com/openapi/Job-endpoints/getlistofjobs
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
        'completionTimeFrom' => false,
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
