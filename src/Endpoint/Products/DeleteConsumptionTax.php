<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteConsumptionTaxResponse\DeleteConsumptionTaxResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/deleteconsumptiontax
 *
 * @method DeleteConsumptionTax setBody(null $entity)
 * @method null getBody()
 */
class DeleteConsumptionTax extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteConsumptionTaxResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/consumption-taxes/{id}';
    }
}
