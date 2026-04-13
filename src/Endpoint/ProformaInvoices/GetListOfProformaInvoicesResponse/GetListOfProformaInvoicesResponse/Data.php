<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoicesResponse\GetListOfProformaInvoicesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoicesResponse\GetListOfProformaInvoicesResponse\Data\ProformaInvoices;

class Data extends Entity
{
    protected ProformaInvoices $proformaInvoices;
    protected ?Paginator $paginator;

    public function getProformaInvoices(): ProformaInvoices
    {
        return $this->proformaInvoices;
    }

    public function setProformaInvoices(ProformaInvoices $proformaInvoices): static
    {
        $this->proformaInvoices = $proformaInvoices;
        return $this;
    }

    public function getPaginator(): ?Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(?Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}
