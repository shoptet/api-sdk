<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse\Data\Warranties\Item;

/**
 * @extends EntityCollection<Item>
 * @property Item[] $data
 * @method Item[] toArray()
 * @method void set(int $key, Item $item)
 * @method null|Item get(int $key)
 * @method void add(Item $item)
 * @method null|Item remove(int $key)
 * @method bool removeItem(Item $item, bool $strict = true)
 * @method bool contains(Item $item, bool $strict = true)
 * @method null|Item offsetGet(int $offset)
 * @method void offsetSet(int $offset, Item $value)
 */
class Warranties extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Item>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarrantiesResponse\GetListOfProductWarrantiesResponse\Data\Warranties\Item';
    }
}
