<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceRequest\CreateInvoiceFromProformaInvoiceRequest\Data;

class CreateInvoiceFromProformaInvoiceRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}
