<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\DeleteSurchargeParameterValueResponse\DeleteSurchargeParameterValueResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/deletesurchargeparametervalue
 *
 * @method DeleteSurchargeParameterValue setBody(null $entity)
 * @method null getBody()
 */
class DeleteSurchargeParameterValue extends Delete
{
    protected array $supportedPathParams = ['paramIndex' => true, 'valueIndex' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteSurchargeParameterValueResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{paramIndex}/{valueIndex}';
    }
}
