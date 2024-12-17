<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItemsResponse\SetProductSetItemsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductSet;

/**
 * @extends EntityCollection<ProductSet>
 * @property ProductSet[] $data
 * @method ProductSet[] toArray()
 * @method void set(int $key, ProductSet $item)
 * @method null|ProductSet get(int $key)
 * @method void add(ProductSet $item)
 * @method null|ProductSet remove(int $key)
 * @method bool removeItem(ProductSet $item, bool $strict = true)
 * @method bool contains(ProductSet $item, bool $strict = true)
 * @method null|ProductSet offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductSet $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductSet>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductSet';
    }
}
