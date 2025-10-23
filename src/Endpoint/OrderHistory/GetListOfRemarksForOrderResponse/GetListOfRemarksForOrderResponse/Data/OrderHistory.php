<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderHistory as EntityOrderHistory;

/**
 * @extends EntityCollection<EntityOrderHistory>
 * @property EntityOrderHistory[] $data
 * @method EntityOrderHistory[] toArray()
 * @method void set(int $key, EntityOrderHistory $item)
 * @method null|EntityOrderHistory get(int $key)
 * @method void add(EntityOrderHistory $item)
 * @method null|EntityOrderHistory remove(int $key)
 * @method bool removeItem(EntityOrderHistory $item, bool $strict = true)
 * @method bool contains(EntityOrderHistory $item, bool $strict = true)
 * @method null|EntityOrderHistory offsetGet(int $offset)
 * @method void offsetSet(int $offset, EntityOrderHistory $value)
 */
class OrderHistory extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<EntityOrderHistory>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\OrderHistory';
    }
}
