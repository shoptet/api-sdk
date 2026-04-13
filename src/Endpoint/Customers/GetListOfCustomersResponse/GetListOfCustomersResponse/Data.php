<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomersResponse\GetListOfCustomersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomersResponse\GetListOfCustomersResponse\Data\Customers;

class Data extends Entity
{
    protected Customers $customers;
    protected Paginator $paginator;

    public function getCustomers(): Customers
    {
        return $this->customers;
    }

    public function setCustomers(Customers $customers): static
    {
        $this->customers = $customers;
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
