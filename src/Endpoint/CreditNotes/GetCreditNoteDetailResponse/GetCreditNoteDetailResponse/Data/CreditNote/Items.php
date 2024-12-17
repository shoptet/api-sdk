<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetailResponse\GetCreditNoteDetailResponse\Data\CreditNote;

use Shoptet\Api\Sdk\Php\Component\Entity\DocumentItemsWithPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DocumentItemsWithPrice>
 * @property DocumentItemsWithPrice[] $data
 * @method DocumentItemsWithPrice[] toArray()
 * @method void set(int $key, DocumentItemsWithPrice $item)
 * @method null|DocumentItemsWithPrice get(int $key)
 * @method void add(DocumentItemsWithPrice $item)
 * @method null|DocumentItemsWithPrice remove(int $key)
 * @method bool removeItem(DocumentItemsWithPrice $item, bool $strict = true)
 * @method bool contains(DocumentItemsWithPrice $item, bool $strict = true)
 * @method null|DocumentItemsWithPrice offsetGet(int $offset)
 * @method void offsetSet(int $offset, DocumentItemsWithPrice $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<DocumentItemsWithPrice>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DocumentItemsWithPrice';
    }
}
