<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNoteResponse\GetDetailOfDeliveryNoteResponse\Data\DeliveryNote;

use Shoptet\Api\Sdk\Php\Component\Entity\DeliveryNoteItem;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DeliveryNoteItem>
 * @property DeliveryNoteItem[] $data
 * @method DeliveryNoteItem[] toArray()
 * @method void set(int $key, DeliveryNoteItem $item)
 * @method null|DeliveryNoteItem get(int $key)
 * @method void add(DeliveryNoteItem $item)
 * @method null|DeliveryNoteItem remove(int $key)
 * @method bool removeItem(DeliveryNoteItem $item, bool $strict = true)
 * @method bool contains(DeliveryNoteItem $item, bool $strict = true)
 * @method null|DeliveryNoteItem offsetGet(int $offset)
 * @method void offsetSet(int $offset, DeliveryNoteItem $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<DeliveryNoteItem>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DeliveryNoteItem';
    }
}
