<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailByIdResponse\GetSalesChannelsDetailByIdResponse\Data\OnlineStore;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\OnlineStoreCountry;

/**
 * @extends EntityCollection<OnlineStoreCountry>
 * @property OnlineStoreCountry[] $data
 * @method OnlineStoreCountry[] toArray()
 * @method void set(int $key, OnlineStoreCountry $item)
 * @method null|OnlineStoreCountry get(int $key)
 * @method void add(OnlineStoreCountry $item)
 * @method null|OnlineStoreCountry remove(int $key)
 * @method bool removeItem(OnlineStoreCountry $item, bool $strict = true)
 * @method bool contains(OnlineStoreCountry $item, bool $strict = true)
 * @method null|OnlineStoreCountry offsetGet(int $offset)
 * @method void offsetSet(int $offset, OnlineStoreCountry $value)
 */
class Countries extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<OnlineStoreCountry>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\OnlineStoreCountry';
    }
}
