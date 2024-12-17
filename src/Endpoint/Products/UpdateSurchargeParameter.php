<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterRequest\UpdateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterResponse\UpdateSurchargeParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updatesurchargeparameter
 *
 * @method UpdateSurchargeParameter setBody(null|array|UpdateSurchargeParameterRequest $entity)
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
