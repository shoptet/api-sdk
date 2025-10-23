<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes;

use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\UpdateConsumptionTaxRequest\UpdateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\UpdateConsumptionTaxResponse\UpdateConsumptionTaxResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/updateconsumptiontax
 *
 * @method UpdateConsumptionTax setBody(null|array|UpdateConsumptionTaxRequest $entity)
 * @method null|UpdateConsumptionTaxRequest getBody()
 */
class UpdateConsumptionTax extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateConsumptionTaxRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateConsumptionTaxResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/consumption-taxes/{id}';
    }
}
