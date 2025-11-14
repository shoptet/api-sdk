<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocksResponse\GetListOfStocksResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocksResponse\GetListOfStocksResponse\Data\Stocks;

class Data extends Entity
{
    protected Stocks $stocks;
    protected int $defaultStockId;

    public function getStocks(): Stocks
    {
        return $this->stocks;
    }

    public function setStocks(Stocks $stocks): static
    {
        $this->stocks = $stocks;
        return $this;
    }

    public function getDefaultStockId(): int
    {
        return $this->defaultStockId;
    }

    public function setDefaultStockId(int $defaultStockId): static
    {
        $this->defaultStockId = $defaultStockId;
        return $this;
    }
}
