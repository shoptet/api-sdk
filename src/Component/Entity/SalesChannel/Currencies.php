<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\SalesChannel;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\SalesChannelCurrency;

/**
 * @extends EntityCollection<SalesChannelCurrency>
 * @property SalesChannelCurrency[] $data
 * @method SalesChannelCurrency[] toArray()
 * @method void set(int $key, SalesChannelCurrency $item)
 * @method null|SalesChannelCurrency get(int $key)
 * @method void add(SalesChannelCurrency $item)
 * @method null|SalesChannelCurrency remove(int $key)
 * @method bool removeItem(SalesChannelCurrency $item, bool $strict = true)
 * @method bool contains(SalesChannelCurrency $item, bool $strict = true)
 * @method null|SalesChannelCurrency offsetGet(int $offset)
 * @method void offsetSet(int $offset, SalesChannelCurrency $value)
 */
class Currencies extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<SalesChannelCurrency>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\SalesChannelCurrency';
    }
}
