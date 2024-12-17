<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteSurchargeParameterByIndexResponse\DeleteSurchargeParameterByIndexResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deletesurchargeparameterbyindex
 *
 * @method DeleteSurchargeParameterByIndex setBody(null $entity)
 * @method null getBody()
 */
class DeleteSurchargeParameterByIndex extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteSurchargeParameterByIndexResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/surcharge-parameters/{code}';
    }
}
