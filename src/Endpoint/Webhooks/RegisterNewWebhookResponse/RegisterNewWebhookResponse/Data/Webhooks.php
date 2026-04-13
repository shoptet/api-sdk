<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookResponse\RegisterNewWebhookResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\Webhook;

/**
 * @extends EntityCollection<Webhook>
 * @property Webhook[] $data
 * @method Webhook[] toArray()
 * @method void set(int $key, Webhook $item)
 * @method null|Webhook get(int $key)
 * @method void add(Webhook $item)
 * @method null|Webhook remove(int $key)
 * @method bool removeItem(Webhook $item, bool $strict = true)
 * @method bool contains(Webhook $item, bool $strict = true)
 * @method null|Webhook offsetGet(int $offset)
 * @method void offsetSet(int $offset, Webhook $value)
 */
class Webhooks extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Webhook>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Webhook';
    }
}
