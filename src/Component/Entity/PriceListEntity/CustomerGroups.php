<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\PriceListEntity;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListCustomerGroup;

/**
 * @extends EntityCollection<PriceListCustomerGroup>
 * @property PriceListCustomerGroup[] $data
 * @method PriceListCustomerGroup[] toArray()
 * @method void set(int $key, PriceListCustomerGroup $item)
 * @method null|PriceListCustomerGroup get(int $key)
 * @method void add(PriceListCustomerGroup $item)
 * @method null|PriceListCustomerGroup remove(int $key)
 * @method bool removeItem(PriceListCustomerGroup $item, bool $strict = true)
 * @method bool contains(PriceListCustomerGroup $item, bool $strict = true)
 * @method null|PriceListCustomerGroup offsetGet(int $offset)
 * @method void offsetSet(int $offset, PriceListCustomerGroup $value)
 */
class CustomerGroups extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<PriceListCustomerGroup>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\PriceListCustomerGroup';
    }
}
