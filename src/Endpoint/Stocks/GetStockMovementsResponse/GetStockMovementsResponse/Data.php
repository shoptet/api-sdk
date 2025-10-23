<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsResponse\GetStockMovementsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsResponse\GetStockMovementsResponse\Data\Movements;

class Data extends Entity
{
    protected Movements $movements;
    protected Paginator $paginator;

    public function getMovements(): Movements
    {
        return $this->movements;
    }

    public function setMovements(Movements $movements): static
    {
        $this->movements = $movements;
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
