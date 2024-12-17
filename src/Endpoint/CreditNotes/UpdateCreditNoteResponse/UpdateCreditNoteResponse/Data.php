<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteResponse\UpdateCreditNoteResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteResponse\UpdateCreditNoteResponse\Data\CreditNote;

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
