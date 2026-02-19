<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertionRequest\OrderBatchInsertionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertionResponse\OrderBatchInsertionResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/orderbatchinsertion
 *
 * @method OrderBatchInsertion setBody(null|array<string, mixed>|OrderBatchInsertionRequest $entity)
 * @method null|OrderBatchInsertionRequest getBody()
 */
class OrderBatchInsertion extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return OrderBatchInsertionRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return OrderBatchInsertionResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/batch';
    }
}
