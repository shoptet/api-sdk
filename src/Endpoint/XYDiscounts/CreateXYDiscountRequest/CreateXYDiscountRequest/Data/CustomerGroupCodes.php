<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscountRequest\CreateXYDiscountRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<string>
 * @property string[] $data
 * @method string[] toArray()
 * @method void set(int $key, string $item)
 * @method null|string get(int $key)
 * @method void add(string $item)
 * @method null|string remove(int $key)
 * @method bool removeItem(string $item, bool $strict = true)
 * @method bool contains(string $item, bool $strict = true)
 * @method null|string offsetGet(int $offset)
 * @method void offsetSet(int $offset, string $value)
 */
class CustomerGroupCodes extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return string
     */
    public function getItemType(array $data): string
    {
        return 'string';
    }
}
