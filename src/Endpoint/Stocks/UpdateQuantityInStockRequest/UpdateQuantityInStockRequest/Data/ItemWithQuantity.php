<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ItemWithQuantity extends Entity
{
    protected string $productCode;
    protected float $quantity;

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }
}
