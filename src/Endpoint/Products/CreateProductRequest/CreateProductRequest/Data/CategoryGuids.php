<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

/**
 * @extends EntityCollection<TypeGuid>
 * @property TypeGuid[] $data
 * @method TypeGuid[] toArray()
 * @method void set(int $key, TypeGuid $item)
 * @method null|TypeGuid get(int $key)
 * @method void add(TypeGuid $item)
 * @method null|TypeGuid remove(int $key)
 * @method bool removeItem(TypeGuid $item, bool $strict = true)
 * @method bool contains(TypeGuid $item, bool $strict = true)
 * @method null|TypeGuid offsetGet(int $offset)
 * @method void offsetSet(int $offset, TypeGuid $value)
 */
class CategoryGuids extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<TypeGuid>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid';
    }
}
