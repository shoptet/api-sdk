<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterValueResponse\CreateSurchargeParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/createsurchargeparametervalue
 *
 * @method CreateSurchargeParameterValue setBody(null|array<string, mixed>|CreateSurchargeParameterValueRequest $entity)
 * @method null|CreateSurchargeParameterValueRequest getBody()
 */
class CreateSurchargeParameterValue extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateSurchargeParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateSurchargeParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{code}';
    }
}
