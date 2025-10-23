<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\PriceWithoutVat\ActionPrice;

class PriceWithoutVat extends Entity
{
    protected ?TypePriceNullable $price;
    protected ?TypePriceNullable $commonPrice;
    protected ?TypePriceNullable $buyPrice;
    protected ?TypePriceRatio $priceRatio;
    protected ?ActionPrice $actionPrice;

    public function getPrice(): ?TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(?TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCommonPrice(): ?TypePriceNullable
    {
        return $this->commonPrice;
    }

    public function setCommonPrice(?TypePriceNullable $commonPrice): static
    {
        $this->commonPrice = $commonPrice;
        return $this;
    }

    public function getBuyPrice(): ?TypePriceNullable
    {
        return $this->buyPrice;
    }

    public function setBuyPrice(?TypePriceNullable $buyPrice): static
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    public function getPriceRatio(): ?TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?TypePriceRatio $priceRatio): static
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
