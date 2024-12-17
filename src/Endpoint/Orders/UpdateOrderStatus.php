<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusRequest\UpdateOrderStatusRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusResponse\UpdateOrderStatusResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/openapi/Orders/updateorderstatus
 *
 * @method UpdateOrderStatus setBody(null|array|UpdateOrderStatusRequest $entity)
 * @method null|UpdateOrderStatusRequest getBody()
 */
class UpdateOrderStatus extends Patch
{
    protected array $supportedPathParams = ['code' => true];

    protected array $supportedQueryParams = [
        'language' => false,
        'suppressDocumentGeneration' => false,
        'suppressEmailSending' => false,
        'suppressSmsSending' => false,
    ];

    public function getRequestEntityClass(): string
    {
        return UpdateOrderStatusRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateOrderStatusResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/{code}/status';
    }
}
