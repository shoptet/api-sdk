<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueResponse\CreateSurchargeParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createsurchargeparametervalue
 *
 * @method CreateSurchargeParameterValue setBody(null|array|CreateSurchargeParameterValueRequest $entity)
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
