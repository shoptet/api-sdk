<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItemResponse\CreateCreditNoteItemResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItemResponse\CreateCreditNoteItemResponse\Data\CreditNote;

class Data extends Entity
{
    protected CreditNote $creditNote;

    public function getCreditNote(): CreditNote
    {
        return $this->creditNote;
    }

    public function setCreditNote(CreditNote $creditNote): static
    {
        $this->creditNote = $creditNote;
        return $this;
    }
}
