<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<int>
 * @property int[] $data
 * @method int[] toArray()
 * @method void set(int $key, int $item)
 * @method null|int get(int $key)
 * @method void add(int $item)
 * @method null|int remove(int $key)
 * @method bool removeItem(int $item, bool $strict = true)
 * @method bool contains(int $item, bool $strict = true)
 * @method null|int offsetGet(int $offset)
 * @method void offsetSet(int $offset, int $value)
 */
class UseItemIds extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return string
     */
    public function getItemType(array $data): string
    {
        return 'int';
    }
}
