<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters;

use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\GetDetailOfFilteringParameterResponse\GetDetailOfFilteringParameterResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/getdetailoffilteringparameter
 *
 * @method GetDetailOfFilteringParameter setBody(null $entity)
 * @method null getBody()
 */
class GetDetailOfFilteringParameter extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetDetailOfFilteringParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}';
    }
}
