<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\Prices\PurchasePrice;

class Prices extends Entity
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
