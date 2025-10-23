<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Article;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<float>
 * @property float[] $data
 * @method float[] toArray()
 * @method void set(int $key, float $item)
 * @method null|float get(int $key)
 * @method void add(float $item)
 * @method null|float remove(int $key)
 * @method bool removeItem(float $item, bool $strict = true)
 * @method bool contains(float $item, bool $strict = true)
 * @method null|float offsetGet(int $offset)
 * @method void offsetSet(int $offset, float $value)
 */
class SectionIds extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return string
     */
    public function getItemType(array $data): string
    {
        return 'float';
    }
}
