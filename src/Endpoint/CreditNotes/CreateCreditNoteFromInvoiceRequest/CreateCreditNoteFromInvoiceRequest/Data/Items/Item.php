<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest\Data\Items;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class Item extends Entity
{
    protected int $invoiceItemId;
    protected ?TypePositiveAmount $amount;

    public function getInvoiceItemId(): int
    {
        return $this->invoiceItemId;
    }

    public function setInvoiceItemId(int $invoiceItemId): static
    {
        $this->invoiceItemId = $invoiceItemId;
        return $this;
    }

    public function getAmount(): ?TypePositiveAmount
    {
        return $this->amount;
    }

    public function setAmount(?TypePositiveAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }
}
