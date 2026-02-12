<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderResponse\CreateProformaInvoiceFromOrderResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\ProformaInvoice;

class Data extends Entity
{
    protected ProformaInvoice $proformaInvoice;

    public function getProformaInvoice(): ProformaInvoice
    {
        return $this->proformaInvoice;
    }

    public function setProformaInvoice(ProformaInvoice $proformaInvoice): static
    {
        $this->proformaInvoice = $proformaInvoice;
        return $this;
    }
}
