<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item3 extends Entity
{
    protected string $productCode;
    protected float $realStock;

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getRealStock(): float
    {
        return $this->realStock;
    }

    public function setRealStock(float $realStock): static
    {
        $this->realStock = $realStock;
        return $this;
    }
}
