<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotificationResponse\GetWebhookNotificationResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Webhooks/getwebhooknotification
 *
 * @method GetWebhookNotification setBody(null $entity)
 * @method null getBody()
 */
class GetWebhookNotification extends PageableGet
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'page' => false,
        'itemsPerPage' => false,
        'status' => false,
        'event' => false,
        'active' => false,
        'from' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetWebhookNotificationResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/webhooks/notifications';
    }
}
