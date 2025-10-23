<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Project/getprojectsaleschannels
 *
 * @method GetProjectSalesChannels setBody(null $entity)
 * @method null getBody()
 */
class GetProjectSalesChannels extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetProjectSalesChannelsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/project/sales-channels';
    }
}
