<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Endpoints;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Endpoints/getlistofavailableendpoints
 *
 * @method GetListOfAvailableEndpoints setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAvailableEndpoints extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'status' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAvailableEndpointsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/system/endpoints';
    }
}
