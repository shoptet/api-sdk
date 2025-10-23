<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemResponse\UpdateCreditNoteItemResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\DocumentItemsWithPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected DocumentItemsWithPrice $creditNoteItem;

    public function getCreditNoteItem(): DocumentItemsWithPrice
    {
        return $this->creditNoteItem;
    }

    public function setCreditNoteItem(DocumentItemsWithPrice $creditNoteItem): static
    {
        $this->creditNoteItem = $creditNoteItem;
        return $this;
    }
}
