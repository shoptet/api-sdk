<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePriceListEntityRequest\UpdatePriceListEntityRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListSalesChannelAssignment;

/**
 * @extends EntityCollection<PriceListSalesChannelAssignment>
 * @property PriceListSalesChannelAssignment[] $data
 * @method PriceListSalesChannelAssignment[] toArray()
 * @method void set(int $key, PriceListSalesChannelAssignment $item)
 * @method null|PriceListSalesChannelAssignment get(int $key)
 * @method void add(PriceListSalesChannelAssignment $item)
 * @method null|PriceListSalesChannelAssignment remove(int $key)
 * @method bool removeItem(PriceListSalesChannelAssignment $item, bool $strict = true)
 * @method bool contains(PriceListSalesChannelAssignment $item, bool $strict = true)
 * @method null|PriceListSalesChannelAssignment offsetGet(int $offset)
 * @method void offsetSet(int $offset, PriceListSalesChannelAssignment $value)
 */
class SalesChannels extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<PriceListSalesChannelAssignment>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\PriceListSalesChannelAssignment';
    }
}
