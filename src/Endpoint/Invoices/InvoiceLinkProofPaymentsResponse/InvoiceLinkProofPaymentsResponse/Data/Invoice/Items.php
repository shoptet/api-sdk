<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsResponse\InvoiceLinkProofPaymentsResponse\Data\Invoice;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\InvoiceItem;

/**
 * @extends EntityCollection<InvoiceItem>
 * @property InvoiceItem[] $data
 * @method InvoiceItem[] toArray()
 * @method void set(int $key, InvoiceItem $item)
 * @method null|InvoiceItem get(int $key)
 * @method void add(InvoiceItem $item)
 * @method null|InvoiceItem remove(int $key)
 * @method bool removeItem(InvoiceItem $item, bool $strict = true)
 * @method bool contains(InvoiceItem $item, bool $strict = true)
 * @method null|InvoiceItem offsetGet(int $offset)
 * @method void offsetSet(int $offset, InvoiceItem $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<InvoiceItem>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\InvoiceItem';
    }
}
