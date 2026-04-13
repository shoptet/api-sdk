<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliersResponse\GetListOfSuppliersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliersResponse\GetListOfSuppliersResponse\Data\Suppliers;

class Data extends Entity
{
    protected Suppliers $suppliers;
    protected Paginator $paginator;

    public function getSuppliers(): Suppliers
    {
        return $this->suppliers;
    }

    public function setSuppliers(Suppliers $suppliers): static
    {
        $this->suppliers = $suppliers;
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
