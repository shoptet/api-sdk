<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackageWithHistory;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentHistory;

/**
 * @extends EntityCollection<ShipmentHistory>
 * @property ShipmentHistory[] $data
 * @method ShipmentHistory[] toArray()
 * @method void set(int $key, ShipmentHistory $item)
 * @method null|ShipmentHistory get(int $key)
 * @method void add(ShipmentHistory $item)
 * @method null|ShipmentHistory remove(int $key)
 * @method bool removeItem(ShipmentHistory $item, bool $strict = true)
 * @method bool contains(ShipmentHistory $item, bool $strict = true)
 * @method null|ShipmentHistory offsetGet(int $offset)
 * @method void offsetSet(int $offset, ShipmentHistory $value)
 */
class History extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ShipmentHistory>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ShipmentHistory';
    }
}
