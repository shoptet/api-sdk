<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsResponse\GetSalesChannelsResponse\Data\SalesChannels\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\TypeCurrency;

/**
 * @extends EntityCollection<TypeCurrency>
 * @property TypeCurrency[] $data
 * @method TypeCurrency[] toArray()
 * @method void set(int $key, TypeCurrency $item)
 * @method null|TypeCurrency get(int $key)
 * @method void add(TypeCurrency $item)
 * @method null|TypeCurrency remove(int $key)
 * @method bool removeItem(TypeCurrency $item, bool $strict = true)
 * @method bool contains(TypeCurrency $item, bool $strict = true)
 * @method null|TypeCurrency offsetGet(int $offset)
 * @method void offsetSet(int $offset, TypeCurrency $value)
 */
class Currencies extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<TypeCurrency>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\TypeCurrency';
    }
}
