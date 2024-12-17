<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderGiftsListResponse\GetOrderGiftsListResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderGift;

/**
 * @extends EntityCollection<OrderGift>
 * @property OrderGift[] $data
 * @method OrderGift[] toArray()
 * @method void set(int $key, OrderGift $item)
 * @method null|OrderGift get(int $key)
 * @method void add(OrderGift $item)
 * @method null|OrderGift remove(int $key)
 * @method bool removeItem(OrderGift $item, bool $strict = true)
 * @method bool contains(OrderGift $item, bool $strict = true)
 * @method null|OrderGift offsetGet(int $offset)
 * @method void offsetSet(int $offset, OrderGift $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<OrderGift>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\OrderGift';
    }
}
