<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceResponse\CreateCreditNoteFromInvoiceResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\CreditNote;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

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
