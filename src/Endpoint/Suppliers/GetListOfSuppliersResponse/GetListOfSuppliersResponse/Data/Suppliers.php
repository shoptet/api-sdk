<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliersResponse\GetListOfSuppliersResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\Supplier;

/**
 * @extends EntityCollection<Supplier>
 * @property Supplier[] $data
 * @method Supplier[] toArray()
 * @method void set(int $key, Supplier $item)
 * @method null|Supplier get(int $key)
 * @method void add(Supplier $item)
 * @method null|Supplier remove(int $key)
 * @method bool removeItem(Supplier $item, bool $strict = true)
 * @method bool contains(Supplier $item, bool $strict = true)
 * @method null|Supplier offsetGet(int $offset)
 * @method void offsetSet(int $offset, Supplier $value)
 */
class Suppliers extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Supplier>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Supplier';
    }
}
