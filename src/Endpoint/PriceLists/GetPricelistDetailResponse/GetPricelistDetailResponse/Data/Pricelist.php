<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetailResponse\GetPricelistDetailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistDetail;

/**
 * @extends EntityCollection<PricelistDetail>
 * @property PricelistDetail[] $data
 * @method PricelistDetail[] toArray()
 * @method void set(int $key, PricelistDetail $item)
 * @method null|PricelistDetail get(int $key)
 * @method void add(PricelistDetail $item)
 * @method null|PricelistDetail remove(int $key)
 * @method bool removeItem(PricelistDetail $item, bool $strict = true)
 * @method bool contains(PricelistDetail $item, bool $strict = true)
 * @method null|PricelistDetail offsetGet(int $offset)
 * @method void offsetSet(int $offset, PricelistDetail $value)
 */
class Pricelist extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<PricelistDetail>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\PricelistDetail';
    }
}
