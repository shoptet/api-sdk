<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategoriesResponse\GetListOfProductCategoriesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Category;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<Category>
 * @property Category[] $data
 * @method Category[] toArray()
 * @method void set(int $key, Category $item)
 * @method null|Category get(int $key)
 * @method void add(Category $item)
 * @method null|Category remove(int $key)
 * @method bool removeItem(Category $item, bool $strict = true)
 * @method bool contains(Category $item, bool $strict = true)
 * @method null|Category offsetGet(int $offset)
 * @method void offsetSet(int $offset, Category $value)
 */
class Categories extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Category>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Category';
    }
}
