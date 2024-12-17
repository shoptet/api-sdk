<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfFilteringParameterResponse\GetDetailOfFilteringParameterResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductFilteringParameterValue;

/**
 * @extends EntityCollection<ProductFilteringParameterValue>
 * @property ProductFilteringParameterValue[] $data
 * @method ProductFilteringParameterValue[] toArray()
 * @method void set(int $key, ProductFilteringParameterValue $item)
 * @method null|ProductFilteringParameterValue get(int $key)
 * @method void add(ProductFilteringParameterValue $item)
 * @method null|ProductFilteringParameterValue remove(int $key)
 * @method bool removeItem(ProductFilteringParameterValue $item, bool $strict = true)
 * @method bool contains(ProductFilteringParameterValue $item, bool $strict = true)
 * @method null|ProductFilteringParameterValue offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductFilteringParameterValue $value)
 */
class Values extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductFilteringParameterValue>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductFilteringParameterValue';
    }
}
