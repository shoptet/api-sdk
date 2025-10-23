<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectDomainListResponse\GetProjectDomainListResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Project/getprojectdomainlist
 *
 * @method GetProjectDomainList setBody(null $entity)
 * @method null getBody()
 */
class GetProjectDomainList extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProjectDomainListResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/project/domain';
    }
}
