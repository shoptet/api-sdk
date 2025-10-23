<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProductPrices\PurchasePrice;

class ProductPrices extends Entity
{
    protected ?PurchasePrice $purchasePrice;

    public function getPurchasePrice(): ?PurchasePrice
    {
        return $this->purchasePrice;
    }

    public function setPurchasePrice(?PurchasePrice $purchasePrice): static
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }
}
