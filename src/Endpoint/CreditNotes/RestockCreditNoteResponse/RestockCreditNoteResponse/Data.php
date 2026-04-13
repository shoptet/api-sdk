<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\RestockCreditNoteResponse\RestockCreditNoteResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\RestockCreditNoteResponse\RestockCreditNoteResponse\Data\Notes;

class Data extends Entity
{
    protected Notes $notes;

    public function getNotes(): Notes
    {
        return $this->notes;
    }

    public function setNotes(Notes $notes): static
    {
        $this->notes = $notes;
        return $this;
    }
}
