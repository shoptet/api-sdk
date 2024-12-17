<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusResponse\UpdateOrderStatusResponse\Data\Order;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem;

/**
 * @extends EntityCollection<OrderItem>
 * @property OrderItem[] $data
 * @method OrderItem[] toArray()
 * @method void set(int $key, OrderItem $item)
 * @method null|OrderItem get(int $key)
 * @method void add(OrderItem $item)
 * @method null|OrderItem remove(int $key)
 * @method bool removeItem(OrderItem $item, bool $strict = true)
 * @method bool contains(OrderItem $item, bool $strict = true)
 * @method null|OrderItem offsetGet(int $offset)
 * @method void offsetSet(int $offset, OrderItem $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<OrderItem>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\OrderItem';
    }
}
