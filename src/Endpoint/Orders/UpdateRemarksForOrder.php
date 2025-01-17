<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrderRequest\UpdateRemarksForOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrderResponse\UpdateRemarksForOrderResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/updateremarksfororder
 *
 * @method UpdateRemarksForOrder setBody(null|array|UpdateRemarksForOrderRequest $entity)
 * @method null|UpdateRemarksForOrderRequest getBody()
 */
class UpdateRemarksForOrder extends Patch
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateRemarksForOrderRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateRemarksForOrderResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/notes';
    }
}
