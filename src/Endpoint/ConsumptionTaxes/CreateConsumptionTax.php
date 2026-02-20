<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes;

use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\CreateConsumptionTaxRequest\CreateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\CreateConsumptionTaxResponse\CreateConsumptionTaxResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/createconsumptiontax
 *
 * @method CreateConsumptionTax setBody(null|array<string, mixed>|CreateConsumptionTaxRequest $entity)
 * @method null|CreateConsumptionTaxRequest getBody()
 */
class CreateConsumptionTax extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateConsumptionTaxRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateConsumptionTaxResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/products/consumption-taxes';
    }
}
