<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;

class Sales extends Entity
{
    protected ?TypePriceRatio $minPriceRatio;
    protected ?bool $freeShipping;
    protected ?bool $freeBilling;
    protected ?bool $loyaltyDiscount;
    protected ?bool $volumeDiscount;
    protected ?bool $quantityDiscount;
    protected ?bool $discountCoupon;

    public function getMinPriceRatio(): ?TypePriceRatio
    {
        return $this->minPriceRatio;
    }

    public function setMinPriceRatio(?TypePriceRatio $minPriceRatio): static
    {
        $this->minPriceRatio = $minPriceRatio;
        return $this;
    }

    public function getFreeShipping(): ?bool
    {
        return $this->freeShipping;
    }

    public function setFreeShipping(?bool $freeShipping): static
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    public function getFreeBilling(): ?bool
    {
        return $this->freeBilling;
    }

    public function setFreeBilling(?bool $freeBilling): static
    {
        $this->freeBilling = $freeBilling;
        return $this;
    }

    public function getLoyaltyDiscount(): ?bool
    {
        return $this->loyaltyDiscount;
    }

    public function setLoyaltyDiscount(?bool $loyaltyDiscount): static
    {
        $this->loyaltyDiscount = $loyaltyDiscount;
        return $this;
    }

    public function getVolumeDiscount(): ?bool
    {
        return $this->volumeDiscount;
    }

    public function setVolumeDiscount(?bool $volumeDiscount): static
    {
        $this->volumeDiscount = $volumeDiscount;
        return $this;
    }

    public function getQuantityDiscount(): ?bool
    {
        return $this->quantityDiscount;
    }

    public function setQuantityDiscount(?bool $quantityDiscount): static
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    public function getDiscountCoupon(): ?bool
    {
        return $this->discountCoupon;
    }

    public function setDiscountCoupon(?bool $discountCoupon): static
    {
        $this->discountCoupon = $discountCoupon;
        return $this;
    }
}
