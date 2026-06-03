<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentDetailResponse\GetShipmentDetailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackageWithHistory;

/**
 * @extends EntityCollection<ShipmentPackageWithHistory>
 * @property ShipmentPackageWithHistory[] $data
 * @method ShipmentPackageWithHistory[] toArray()
 * @method void set(int $key, ShipmentPackageWithHistory $item)
 * @method null|ShipmentPackageWithHistory get(int $key)
 * @method void add(ShipmentPackageWithHistory $item)
 * @method null|ShipmentPackageWithHistory remove(int $key)
 * @method bool removeItem(ShipmentPackageWithHistory $item, bool $strict = true)
 * @method bool contains(ShipmentPackageWithHistory $item, bool $strict = true)
 * @method null|ShipmentPackageWithHistory offsetGet(int $offset)
 * @method void offsetSet(int $offset, ShipmentPackageWithHistory $value)
 */
class Packages extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<ShipmentPackageWithHistory>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackageWithHistory';
    }
}
