<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes;

use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\GetListOfConsumptionTaxesResponse\GetListOfConsumptionTaxesResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/getlistofconsumptiontaxes
 *
 * @method GetListOfConsumptionTaxes setBody(null $entity)
 * @method null getBody()
 */
class GetListOfConsumptionTaxes extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfConsumptionTaxesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/consumption-taxes';
    }
}
