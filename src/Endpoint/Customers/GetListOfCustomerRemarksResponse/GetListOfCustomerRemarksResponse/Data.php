<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRemarksResponse\GetListOfCustomerRemarksResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRemarksResponse\GetListOfCustomerRemarksResponse\Data\Remarks;

class Data extends Entity
{
    protected Remarks $remarks;
    protected Paginator $paginator;

    public function getRemarks(): Remarks
    {
        return $this->remarks;
    }

    public function setRemarks(Remarks $remarks): static
    {
        $this->remarks = $remarks;
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
