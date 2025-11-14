<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfAllProformaInvoicesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfAllProformaInvoicesResponse\GetListOfAllProformaInvoicesResponse\Data;

class GetListOfAllProformaInvoicesResponse extends Entity
{
    protected ?Data $data;

    public function getData(): ?Data
    {
        return $this->data;
    }

    public function setData(?Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}
