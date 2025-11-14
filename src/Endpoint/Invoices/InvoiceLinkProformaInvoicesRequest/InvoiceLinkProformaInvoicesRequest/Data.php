<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoicesRequest\InvoiceLinkProformaInvoicesRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoicesRequest\InvoiceLinkProformaInvoicesRequest\Data\ProformaInvoiceCodes;

class Data extends Entity
{
    protected ProformaInvoiceCodes $proformaInvoiceCodes;

    public function getProformaInvoiceCodes(): ProformaInvoiceCodes
    {
        return $this->proformaInvoiceCodes;
    }

    public function setProformaInvoiceCodes(ProformaInvoiceCodes $proformaInvoiceCodes): static
    {
        $this->proformaInvoiceCodes = $proformaInvoiceCodes;
        return $this;
    }
}
