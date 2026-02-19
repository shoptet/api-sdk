<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders;

use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeResponse\BulkOrderStatusChangeResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Patch;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/bulkorderstatuschange
 *
 * @method BulkOrderStatusChange setBody(null|array<string, mixed>|BulkOrderStatusChangeRequest $entity)
 * @method null|BulkOrderStatusChangeRequest getBody()
 */
class BulkOrderStatusChange extends Patch
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'suppressDocumentGeneration' => false,
        'suppressEmailSending' => false,
        'suppressSmsSending' => false,
    ];

    public function getRequestEntityClass(): string
    {
        return BulkOrderStatusChangeRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return BulkOrderStatusChangeResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/orders/status-change';
    }
}
