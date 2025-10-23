<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\GetListOfConsumptionTaxesResponse\GetListOfConsumptionTaxesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\ConsumptionTax;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<ConsumptionTax>
 * @property ConsumptionTax[] $data
 * @method ConsumptionTax[] toArray()
 * @method void set(int $key, ConsumptionTax $item)
 * @method null|ConsumptionTax get(int $key)
 * @method void add(ConsumptionTax $item)
 * @method null|ConsumptionTax remove(int $key)
 * @method bool removeItem(ConsumptionTax $item, bool $strict = true)
 * @method bool contains(ConsumptionTax $item, bool $strict = true)
 * @method null|ConsumptionTax offsetGet(int $offset)
 * @method void offsetSet(int $offset, ConsumptionTax $value)
 */
class ConsumptionTaxes extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ConsumptionTax>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ConsumptionTax';
    }
}
