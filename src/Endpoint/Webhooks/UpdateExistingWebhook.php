<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\Patch;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhookRequest\UpdateExistingWebhookRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhookResponse\UpdateExistingWebhookResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/updateexistingwebhook
 *
 * @method UpdateExistingWebhook setBody(null|array|UpdateExistingWebhookRequest $entity)
 * @method null|UpdateExistingWebhookRequest getBody()
 */
class UpdateExistingWebhook extends Patch
{
    protected array $supportedPathParams = ['id' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return UpdateExistingWebhookRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return UpdateExistingWebhookResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks/{id}';
    }
}
