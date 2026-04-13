<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockDetailResponse\GetStockDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Stock;

class Data extends Entity
{
    protected Stock $stock;

    public function getStock(): Stock
    {
        return $this->stock;
    }

    public function setStock(Stock $stock): static
    {
        $this->stock = $stock;
        return $this;
    }
}
