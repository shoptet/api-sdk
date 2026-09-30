<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\GetPriceListPricesResponse\GetPriceListPricesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\PriceListPrice;

/**
 * @extends EntityCollection<PriceListPrice>
 * @property PriceListPrice[] $data
 * @method PriceListPrice[] toArray()
 * @method void set(int $key, PriceListPrice $item)
 * @method null|PriceListPrice get(int $key)
 * @method void add(PriceListPrice $item)
 * @method null|PriceListPrice remove(int $key)
 * @method bool removeItem(PriceListPrice $item, bool $strict = true)
 * @method bool contains(PriceListPrice $item, bool $strict = true)
 * @method null|PriceListPrice offsetGet(int $offset)
 * @method void offsetSet(int $offset, PriceListPrice $value)
 */
class Prices extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<PriceListPrice>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\PriceListPrice';
    }
}
