<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse\Data\ShipmentCarriers\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentCarrierCountry;

/**
 * @extends EntityCollection<ShipmentCarrierCountry>
 * @property ShipmentCarrierCountry[] $data
 * @method ShipmentCarrierCountry[] toArray()
 * @method void set(int $key, ShipmentCarrierCountry $item)
 * @method null|ShipmentCarrierCountry get(int $key)
 * @method void add(ShipmentCarrierCountry $item)
 * @method null|ShipmentCarrierCountry remove(int $key)
 * @method bool removeItem(ShipmentCarrierCountry $item, bool $strict = true)
 * @method bool contains(ShipmentCarrierCountry $item, bool $strict = true)
 * @method null|ShipmentCarrierCountry offsetGet(int $offset)
 * @method void offsetSet(int $offset, ShipmentCarrierCountry $value)
 */
class Countries extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<ShipmentCarrierCountry>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ShipmentCarrierCountry';
    }
}
