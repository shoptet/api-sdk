<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValueResponse\UpdateSurchargeParameterValueResponse\Data\SurchargeParameter;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\SurchargeParameterValue;

/**
 * @extends EntityCollection<SurchargeParameterValue>
 * @property SurchargeParameterValue[] $data
 * @method SurchargeParameterValue[] toArray()
 * @method void set(int $key, SurchargeParameterValue $item)
 * @method null|SurchargeParameterValue get(int $key)
 * @method void add(SurchargeParameterValue $item)
 * @method null|SurchargeParameterValue remove(int $key)
 * @method bool removeItem(SurchargeParameterValue $item, bool $strict = true)
 * @method bool contains(SurchargeParameterValue $item, bool $strict = true)
 * @method null|SurchargeParameterValue offsetGet(int $offset)
 * @method void offsetSet(int $offset, SurchargeParameterValue $value)
 */
class Values extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<SurchargeParameterValue>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\SurchargeParameterValue';
    }
}
