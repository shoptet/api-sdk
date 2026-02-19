<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderRequest\CreateProformaInvoiceFromOrderRequest\Data;

class CreateProformaInvoiceFromOrderRequest extends Entity
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
