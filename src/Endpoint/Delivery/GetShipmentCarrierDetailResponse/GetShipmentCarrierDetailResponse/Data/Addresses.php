<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentAddress;

/**
 * @extends EntityCollection<ShipmentAddress>
 * @property ShipmentAddress[] $data
 * @method ShipmentAddress[] toArray()
 * @method void set(int $key, ShipmentAddress $item)
 * @method null|ShipmentAddress get(int $key)
 * @method void add(ShipmentAddress $item)
 * @method null|ShipmentAddress remove(int $key)
 * @method bool removeItem(ShipmentAddress $item, bool $strict = true)
 * @method bool contains(ShipmentAddress $item, bool $strict = true)
 * @method null|ShipmentAddress offsetGet(int $offset)
 * @method void offsetSet(int $offset, ShipmentAddress $value)
 */
class Addresses extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ShipmentAddress>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ShipmentAddress';
    }
}
