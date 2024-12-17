<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStockResponse\GetProductSuppliesInStockResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStockResponse\GetProductSuppliesInStockResponse\Data\Supplies;

class Data extends Entity
{
    protected Supplies $supplies;
    protected Paginator $paginator;

    public function getSupplies(): Supplies
    {
        return $this->supplies;
    }

    public function setSupplies(Supplies $supplies): static
    {
        $this->supplies = $supplies;
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
