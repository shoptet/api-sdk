<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeProductPriceRatio;

class PriceSales extends Entity
{
    protected TypeProductPriceRatio $minPriceRatio;
    protected bool $freeShipping;
    protected bool $freeBilling;
    protected bool $loyaltyDiscount;
    protected bool $volumeDiscount;
    protected bool $quantityDiscount;
    protected bool $discountCoupon;

    public function getMinPriceRatio(): TypeProductPriceRatio
    {
        return $this->minPriceRatio;
    }

    public function setMinPriceRatio(TypeProductPriceRatio $minPriceRatio): static
    {
        $this->minPriceRatio = $minPriceRatio;
        return $this;
    }

    public function isFreeShipping(): bool
    {
        return $this->freeShipping;
    }

    public function setFreeShipping(bool $freeShipping): static
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    public function isFreeBilling(): bool
    {
        return $this->freeBilling;
    }

    public function setFreeBilling(bool $freeBilling): static
    {
        $this->freeBilling = $freeBilling;
        return $this;
    }

    public function isLoyaltyDiscount(): bool
    {
        return $this->loyaltyDiscount;
    }

    public function setLoyaltyDiscount(bool $loyaltyDiscount): static
    {
        $this->loyaltyDiscount = $loyaltyDiscount;
        return $this;
    }

    public function isVolumeDiscount(): bool
    {
        return $this->volumeDiscount;
    }

    public function setVolumeDiscount(bool $volumeDiscount): static
    {
        $this->volumeDiscount = $volumeDiscount;
        return $this;
    }

    public function isQuantityDiscount(): bool
    {
        return $this->quantityDiscount;
    }

    public function setQuantityDiscount(bool $quantityDiscount): static
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    public function isDiscountCoupon(): bool
    {
        return $this->discountCoupon;
    }

    public function setDiscountCoupon(bool $discountCoupon): static
    {
        $this->discountCoupon = $discountCoupon;
        return $this;
    }
}
