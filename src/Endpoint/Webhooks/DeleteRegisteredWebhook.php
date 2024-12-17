<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\Delete;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\DeleteRegisteredWebhookResponse\DeleteRegisteredWebhookResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/deleteregisteredwebhook
 *
 * @method DeleteRegisteredWebhook setBody(null $entity)
 * @method null getBody()
 */
class DeleteRegisteredWebhook extends Delete
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return DeleteRegisteredWebhookResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks/{id}';
    }
}
