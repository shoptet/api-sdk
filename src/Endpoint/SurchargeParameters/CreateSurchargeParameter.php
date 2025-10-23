<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterRequest\CreateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterResponse\CreateSurchargeParameterResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/createsurchargeparameter
 *
 * @method CreateSurchargeParameter setBody(null|array|CreateSurchargeParameterRequest $entity)
 * @method null|CreateSurchargeParameterRequest getBody()
 */
class CreateSurchargeParameter extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateSurchargeParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateSurchargeParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters';
    }
}
