<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item1 extends Entity
{
    protected string $productCode;
    protected float $amountChange;

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getAmountChange(): float
    {
        return $this->amountChange;
    }

    public function setAmountChange(float $amountChange): static
    {
        $this->amountChange = $amountChange;
        return $this;
    }
}
