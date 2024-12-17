<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterResponse\CreateVariantParameterResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductVariantParameterValue;

/**
 * @extends EntityCollection<ProductVariantParameterValue>
 * @property ProductVariantParameterValue[] $data
 * @method ProductVariantParameterValue[] toArray()
 * @method void set(int $key, ProductVariantParameterValue $item)
 * @method null|ProductVariantParameterValue get(int $key)
 * @method void add(ProductVariantParameterValue $item)
 * @method null|ProductVariantParameterValue remove(int $key)
 * @method bool removeItem(ProductVariantParameterValue $item, bool $strict = true)
 * @method bool contains(ProductVariantParameterValue $item, bool $strict = true)
 * @method null|ProductVariantParameterValue offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductVariantParameterValue $value)
 */
class Values extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductVariantParameterValue>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductVariantParameterValue';
    }
}
