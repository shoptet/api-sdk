<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscountSettingsResponse\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;

class DiscountValue extends Entity
{
    protected TypePriceRatio $priceRatio;

    public function getPriceRatio(): TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }
}
