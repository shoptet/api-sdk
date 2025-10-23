<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameter;

/**
 * @extends EntityCollection<ProductSurchargeParameter>
 * @property ProductSurchargeParameter[] $data
 * @method ProductSurchargeParameter[] toArray()
 * @method void set(int $key, ProductSurchargeParameter $item)
 * @method null|ProductSurchargeParameter get(int $key)
 * @method void add(ProductSurchargeParameter $item)
 * @method null|ProductSurchargeParameter remove(int $key)
 * @method bool removeItem(ProductSurchargeParameter $item, bool $strict = true)
 * @method bool contains(ProductSurchargeParameter $item, bool $strict = true)
 * @method null|ProductSurchargeParameter offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductSurchargeParameter $value)
 */
class SurchargeParameters extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductSurchargeParameter>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductSurchargeParameter';
    }
}
