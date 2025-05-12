<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeProductPriceRatio;

class VariantPrice extends Entity
{
    protected TypePriceNullable $price;
    protected TypePriceNullable $commonPrice;
    protected TypePriceNullable $buyPrice;
    protected TypeProductPriceRatio $priceRatio;
    protected ActionPrice $actionPrice;

    public function getPrice(): TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCommonPrice(): TypePriceNullable
    {
        return $this->commonPrice;
    }

    public function setCommonPrice(TypePriceNullable $commonPrice): static
    {
        $this->commonPrice = $commonPrice;
        return $this;
    }

    public function getBuyPrice(): TypePriceNullable
    {
        return $this->buyPrice;
    }

    public function setBuyPrice(TypePriceNullable $buyPrice): static
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

    public function getActionPrice(): ActionPrice
    {
        return $this->actionPrice;
    }

    public function setActionPrice(ActionPrice $actionPrice): static
    {
        $this->actionPrice = $actionPrice;
        return $this;
    }
}
