<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item1;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item2;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item3;

/**
 * @extends EntityCollection<Item1|Item2|Item3>
 * @property Item1|Item2|Item3[] $data
 * @method Item1|Item2|Item3[] toArray()
 * @method void set(int $key, Item1|Item2|Item3 $item)
 * @method null|Item1|Item2|Item3 get(int $key)
 * @method void add(Item1|Item2|Item3 $item)
 * @method null|Item1|Item2|Item3 remove(int $key)
 * @method bool removeItem(Item1|Item2|Item3 $item, bool $strict = true)
 * @method bool contains(Item1|Item2|Item3 $item, bool $strict = true)
 * @method null|Item1|Item2|Item3 offsetGet(int $offset)
 * @method void offsetSet(int $offset, Item1|Item2|Item3 $value)
 */
class Packages extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<Entity>
     */
    public function getItemType(mixed $data): string
    {
        return $this->determineMultiTypeByData('Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item1|Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item2|Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages\Item3', $data);
    }
}
