<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetParametricCategoryDetailResponse\GetParametricCategoryDetailResponse\Data\ParametricCategory;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ParameterValueCombinations;

/**
 * @extends EntityCollection<ParameterValueCombinations>
 * @property ParameterValueCombinations[] $data
 * @method ParameterValueCombinations[] toArray()
 * @method void set(int $key, ParameterValueCombinations $item)
 * @method null|ParameterValueCombinations get(int $key)
 * @method void add(ParameterValueCombinations $item)
 * @method null|ParameterValueCombinations remove(int $key)
 * @method bool removeItem(ParameterValueCombinations $item, bool $strict = true)
 * @method bool contains(ParameterValueCombinations $item, bool $strict = true)
 * @method null|ParameterValueCombinations offsetGet(int $offset)
 * @method void offsetSet(int $offset, ParameterValueCombinations $value)
 */
class Parameters extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ParameterValueCombinations>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ParameterValueCombinations';
    }
}
