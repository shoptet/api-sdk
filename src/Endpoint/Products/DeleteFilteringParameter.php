<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteFilteringParameterResponse\DeleteFilteringParameterResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deletefilteringparameter
 *
 * @method DeleteFilteringParameter setBody(null $entity)
 * @method null getBody()
 */
class DeleteFilteringParameter extends Delete
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteFilteringParameterResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/filtering-parameters/{code}';
    }
}
