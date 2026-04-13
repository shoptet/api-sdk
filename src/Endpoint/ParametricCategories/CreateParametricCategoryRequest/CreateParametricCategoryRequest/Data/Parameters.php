<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryRequest\CreateParametricCategoryRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ParameterValueCombinationsCodes;

/**
 * @extends EntityCollection<ParameterValueCombinationsCodes>
 * @property ParameterValueCombinationsCodes[] $data
 * @method ParameterValueCombinationsCodes[] toArray()
 * @method void set(int $key, ParameterValueCombinationsCodes $item)
 * @method null|ParameterValueCombinationsCodes get(int $key)
 * @method void add(ParameterValueCombinationsCodes $item)
 * @method null|ParameterValueCombinationsCodes remove(int $key)
 * @method bool removeItem(ParameterValueCombinationsCodes $item, bool $strict = true)
 * @method bool contains(ParameterValueCombinationsCodes $item, bool $strict = true)
 * @method null|ParameterValueCombinationsCodes offsetGet(int $offset)
 * @method void offsetSet(int $offset, ParameterValueCombinationsCodes $value)
 */
class Parameters extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ParameterValueCombinationsCodes>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ParameterValueCombinationsCodes';
    }
}
