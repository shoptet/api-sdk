<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateConsumptionTaxRequest\CreateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateConsumptionTaxResponse\CreateConsumptionTaxResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Products/createconsumptiontax
 *
 * @method CreateConsumptionTax setBody(null|array|CreateConsumptionTaxRequest $entity)
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
