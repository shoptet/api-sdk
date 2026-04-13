<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\DocumentItemsWithPrice;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ItemPrice;

/**
 * @extends EntityCollection<ItemPrice>
 * @property ItemPrice[] $data
 * @method ItemPrice[] toArray()
 * @method void set(int $key, ItemPrice $item)
 * @method null|ItemPrice get(int $key)
 * @method void add(ItemPrice $item)
 * @method null|ItemPrice remove(int $key)
 * @method bool removeItem(ItemPrice $item, bool $strict = true)
 * @method bool contains(ItemPrice $item, bool $strict = true)
 * @method null|ItemPrice offsetGet(int $offset)
 * @method void offsetSet(int $offset, ItemPrice $value)
 */
class DisplayPrices extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ItemPrice>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ItemPrice';
    }
}
