<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookRequest\RegisterNewWebhookRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookResponse\RegisterNewWebhookResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/registernewwebhook
 *
 * @method RegisterNewWebhook setBody(null|array|RegisterNewWebhookRequest $entity)
 * @method null|RegisterNewWebhookRequest getBody()
 */
class RegisterNewWebhook extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return RegisterNewWebhookRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return RegisterNewWebhookResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks';
    }
}
