<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValueRequest\UpdateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValueResponse\UpdateSurchargeParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updatesurchargeparametervalue
 *
 * @method UpdateSurchargeParameterValue setBody(null|array|UpdateSurchargeParameterValueRequest $entity)
 * @method null|UpdateSurchargeParameterValueRequest getBody()
 */
class UpdateSurchargeParameterValue extends Patch
{
    protected array $supportedPathParams = ['paramIndex' => true, 'valueIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateSurchargeParameterValueRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateSurchargeParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{paramIndex}/{valueIndex}';
    }
}
