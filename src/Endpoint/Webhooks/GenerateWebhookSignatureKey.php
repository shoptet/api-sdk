<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GenerateWebhookSignatureKeyResponse\GenerateWebhookSignatureKeyResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/generatewebhooksignaturekey
 *
 * @method GenerateWebhookSignatureKey setBody(null $entity)
 * @method null getBody()
 */
class GenerateWebhookSignatureKey extends Post
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GenerateWebhookSignatureKeyResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks/renew-signature-key';
    }
}
