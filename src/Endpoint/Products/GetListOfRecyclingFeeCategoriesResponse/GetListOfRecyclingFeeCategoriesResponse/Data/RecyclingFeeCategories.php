<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfRecyclingFeeCategoriesResponse\GetListOfRecyclingFeeCategoriesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\RecyclingFeeCategory;

/**
 * @extends EntityCollection<RecyclingFeeCategory>
 * @property RecyclingFeeCategory[] $data
 * @method RecyclingFeeCategory[] toArray()
 * @method void set(int $key, RecyclingFeeCategory $item)
 * @method null|RecyclingFeeCategory get(int $key)
 * @method void add(RecyclingFeeCategory $item)
 * @method null|RecyclingFeeCategory remove(int $key)
 * @method bool removeItem(RecyclingFeeCategory $item, bool $strict = true)
 * @method bool contains(RecyclingFeeCategory $item, bool $strict = true)
 * @method null|RecyclingFeeCategory offsetGet(int $offset)
 * @method void offsetSet(int $offset, RecyclingFeeCategory $value)
 */
class RecyclingFeeCategories extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<RecyclingFeeCategory>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\RecyclingFeeCategory';
    }
}
