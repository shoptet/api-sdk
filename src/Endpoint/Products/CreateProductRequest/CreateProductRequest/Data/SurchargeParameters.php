<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameter;

/**
 * @extends EntityCollection<ProductRequestSurchargeParameter>
 * @property ProductRequestSurchargeParameter[] $data
 * @method ProductRequestSurchargeParameter[] toArray()
 * @method void set(int $key, ProductRequestSurchargeParameter $item)
 * @method null|ProductRequestSurchargeParameter get(int $key)
 * @method void add(ProductRequestSurchargeParameter $item)
 * @method null|ProductRequestSurchargeParameter remove(int $key)
 * @method bool removeItem(ProductRequestSurchargeParameter $item, bool $strict = true)
 * @method bool contains(ProductRequestSurchargeParameter $item, bool $strict = true)
 * @method null|ProductRequestSurchargeParameter offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProductRequestSurchargeParameter $value)
 */
class SurchargeParameters extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProductRequestSurchargeParameter>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameter';
    }
}
