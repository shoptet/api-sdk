<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes;

use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\DeleteConsumptionTaxResponse\DeleteConsumptionTaxResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Delete;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/deleteconsumptiontax
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
