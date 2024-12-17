<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetailResponse\GetInvoiceDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetailResponse\GetInvoiceDetailResponse\Data\Invoice;

class Data extends Entity
{
    protected Invoice $invoice;

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(Invoice $invoice): static
    {
        $this->invoice = $invoice;
        return $this;
    }
}
