<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest\Data\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class Item extends Entity
{
    protected int $invoiceItemId;
    protected ?TypePositiveAmountNullable $amount;

    public function getInvoiceItemId(): int
    {
        return $this->invoiceItemId;
    }

    public function setInvoiceItemId(int $invoiceItemId): static
    {
        $this->invoiceItemId = $invoiceItemId;
        return $this;
    }

    public function getAmount(): ?TypePositiveAmountNullable
    {
        return $this->amount;
    }

    public function setAmount(?TypePositiveAmountNullable $amount): static
    {
        $this->amount = $amount;
        return $this;
    }
}
