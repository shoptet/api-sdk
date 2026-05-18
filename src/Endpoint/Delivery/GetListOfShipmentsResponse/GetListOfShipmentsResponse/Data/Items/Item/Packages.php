<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentsResponse\GetListOfShipmentsResponse\Data\Items\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackage;

/**
 * @extends EntityCollection<ShipmentPackage>
 * @property ShipmentPackage[] $data
 * @method ShipmentPackage[] toArray()
 * @method void set(int $key, ShipmentPackage $item)
 * @method null|ShipmentPackage get(int $key)
 * @method void add(ShipmentPackage $item)
 * @method null|ShipmentPackage remove(int $key)
 * @method bool removeItem(ShipmentPackage $item, bool $strict = true)
 * @method bool contains(ShipmentPackage $item, bool $strict = true)
 * @method null|ShipmentPackage offsetGet(int $offset)
 * @method void offsetSet(int $offset, ShipmentPackage $value)
 */
class Packages extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ShipmentPackage>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackage';
    }
}
