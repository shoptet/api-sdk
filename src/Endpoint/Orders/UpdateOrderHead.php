<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadResponse\UpdateOrderHeadResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/updateorderhead
 *
 * @method UpdateOrderHead setBody(null|array|UpdateOrderHeadRequest $entity)
 * @method null|UpdateOrderHeadRequest getBody()
 */
class UpdateOrderHead extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderHeadRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderHeadResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/head';
    }
}
