<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest\Data\Settings\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class DiscountValue extends Entity
{
    protected float $priceRatio;

    public function getPriceRatio(): float
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(float $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }
}
