<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameter;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameterValue;

/**
 * @extends EntityCollection<ProductRequestSurchargeParameterValue>
 * @property ProductRequestSurchargeParameterValue[] $data
 * @method ProductRequestSurchargeParameterValue[] toArray()
 * @method void set(int $key, ProductRequestSurchargeParameterValue $item)
 * @method null|ProductRequestSurchargeParameterValue get(int $key)
 * @method void add(ProductRequestSurchargeParameterValue $item)
 * @method null|ProductRequestSurchargeParameterValue remove(int $key)
 * @method bool removeItem(ProductRequestSurchargeParameterValue $item, bool $strict = true)
 * @method bool contains(ProductRequestSurchargeParameterValue $item, bool $strict = true)
 * @method null|ProductRequestSurchargeParameterValue offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductRequestSurchargeParameterValue $value)
 */
class Values extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductRequestSurchargeParameterValue>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameterValue';
    }
}
