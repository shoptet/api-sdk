<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data\Item1;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data\Item2;

/**
 * @extends EntityCollection<Item1|Item2>
 * @property Item1|Item2[] $data
 * @method Item1|Item2[] toArray()
 * @method void set(int $key, Item1|Item2 $item)
 * @method null|Item1|Item2 get(int $key)
 * @method void add(Item1|Item2 $item)
 * @method null|Item1|Item2 remove(int $key)
 * @method bool removeItem(Item1|Item2 $item, bool $strict = true)
 * @method bool contains(Item1|Item2 $item, bool $strict = true)
 * @method null|Item1|Item2 offsetGet(int $offset)
 * @method void offsetSet(int $offset, Item1|Item2 $value)
 */
class Data extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Entity>
     */
    public function getItemType(array $data): string
    {
        return $this->determineMultiTypeByData('Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data\Item1|Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data\Item2', $data);
    }
}
