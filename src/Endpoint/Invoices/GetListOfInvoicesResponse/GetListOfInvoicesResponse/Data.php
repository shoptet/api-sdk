<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoicesResponse\GetListOfInvoicesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoicesResponse\GetListOfInvoicesResponse\Data\Invoices;

class Data extends Entity
{
    protected Invoices $invoices;
    protected Paginator $paginator;

    public function getInvoices(): Invoices
    {
        return $this->invoices;
    }

    public function setInvoices(Invoices $invoices): static
    {
        $this->invoices = $invoices;
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
