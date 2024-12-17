<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceListsResponse\GetListOfPriceListsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\Pricelist;

/**
 * @extends EntityCollection<Pricelist>
 * @property Pricelist[] $data
 * @method Pricelist[] toArray()
 * @method void set(int $key, Pricelist $item)
 * @method null|Pricelist get(int $key)
 * @method void add(Pricelist $item)
 * @method null|Pricelist remove(int $key)
 * @method bool removeItem(Pricelist $item, bool $strict = true)
 * @method bool contains(Pricelist $item, bool $strict = true)
 * @method null|Pricelist offsetGet(int $offset)
 * @method void offsetSet(int $offset, Pricelist $value)
 */
class Pricelists extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Pricelist>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Pricelist';
    }
}
