<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeProductPriceRatio;

class VariantPrice extends Entity
{
    protected TypePrice $price;
    protected TypePrice $commonPrice;
    protected TypePrice $buyPrice;
    protected TypeProductPriceRatio $priceRatio;
    protected ?ActionPrice $actionPrice;

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCommonPrice(): TypePrice
    {
        return $this->commonPrice;
    }

    public function setCommonPrice(TypePrice $commonPrice): static
    {
        $this->commonPrice = $commonPrice;
        return $this;
    }

    public function getBuyPrice(): TypePrice
    {
        return $this->buyPrice;
    }

    public function setBuyPrice(TypePrice $buyPrice): static
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getPriceRatio(): TypeProductPriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(TypeProductPriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getActionPrice(): ?ActionPrice
    {
        return $this->actionPrice;
    }

    public function setActionPrice(?ActionPrice $actionPrice): static
    {
        $this->actionPrice = $actionPrice;
        return $this;
    }
}
