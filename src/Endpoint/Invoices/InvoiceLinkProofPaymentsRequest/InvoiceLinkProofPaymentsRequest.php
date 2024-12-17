<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest\Data;

class InvoiceLinkProofPaymentsRequest extends Entity
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
