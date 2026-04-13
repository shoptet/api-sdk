<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterRequest\UpdateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterResponse\UpdateSurchargeParameterResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/updatesurchargeparameter
 *
 * @method UpdateSurchargeParameter setBody(null|array<string, mixed>|UpdateSurchargeParameterRequest $entity)
 * @method null|UpdateSurchargeParameterRequest getBody()
 */
class UpdateSurchargeParameter extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateSurchargeParameterRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateSurchargeParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{code}';
    }
}
