<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameter;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameterValue;

/**
 * @extends EntityCollection<ProductSurchargeParameterValue>
 * @property ProductSurchargeParameterValue[] $data
 * @method ProductSurchargeParameterValue[] toArray()
 * @method void set(int $key, ProductSurchargeParameterValue $item)
 * @method null|ProductSurchargeParameterValue get(int $key)
 * @method void add(ProductSurchargeParameterValue $item)
 * @method null|ProductSurchargeParameterValue remove(int $key)
 * @method bool removeItem(ProductSurchargeParameterValue $item, bool $strict = true)
 * @method bool contains(ProductSurchargeParameterValue $item, bool $strict = true)
 * @method null|ProductSurchargeParameterValue offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductSurchargeParameterValue $value)
 */
class Values extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductSurchargeParameterValue>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameterValue';
    }
}
