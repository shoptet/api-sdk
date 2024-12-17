<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetailResponse\GetProformaInvoiceDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetailResponse\GetProformaInvoiceDetailResponse\Data\ProformaInvoice;

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
