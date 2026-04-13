<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotificationResponse\GetWebhookNotificationResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\WebhookNotification;

/**
 * @extends EntityCollection<WebhookNotification>
 * @property WebhookNotification[] $data
 * @method WebhookNotification[] toArray()
 * @method void set(int $key, WebhookNotification $item)
 * @method null|WebhookNotification get(int $key)
 * @method void add(WebhookNotification $item)
 * @method null|WebhookNotification remove(int $key)
 * @method bool removeItem(WebhookNotification $item, bool $strict = true)
 * @method bool contains(WebhookNotification $item, bool $strict = true)
 * @method null|WebhookNotification offsetGet(int $offset)
 * @method void offsetSet(int $offset, WebhookNotification $value)
 */
class Notifications extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<WebhookNotification>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\WebhookNotification';
    }
}
