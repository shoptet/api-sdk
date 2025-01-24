<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateConsumptionTaxRequest\UpdateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateConsumptionTaxResponse\UpdateConsumptionTaxResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/updateconsumptiontax
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
