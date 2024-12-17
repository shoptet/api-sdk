<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotesResponse\GetListOfCreditNotesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotesResponse\GetListOfCreditNotesResponse\Data\CreditNotes;

class Data extends Entity
{
    protected CreditNotes $creditNotes;
    protected Paginator $paginator;

    public function getCreditNotes(): CreditNotes
    {
        return $this->creditNotes;
    }

    public function setCreditNotes(CreditNotes $creditNotes): static
    {
        $this->creditNotes = $creditNotes;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}
