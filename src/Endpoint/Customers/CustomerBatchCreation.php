<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers;

use Shoptet\Api\Sdk\Php\Async\AsyncEndpoint;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CustomerBatchCreationRequest\CustomerBatchCreationRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CustomerBatchCreationResponse\CustomerBatchCreationResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/customerbatchcreation
 *
 * @method CustomerBatchCreation setBody(null|array<string, mixed>|CustomerBatchCreationRequest $entity)
 * @method null|CustomerBatchCreationRequest getBody()
 */
class CustomerBatchCreation extends Post implements AsyncEndpoint
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CustomerBatchCreationRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CustomerBatchCreationResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/customers/batch';
    }
}
