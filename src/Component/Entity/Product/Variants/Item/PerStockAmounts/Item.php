<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\PerStockAmounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected int $stockId;
    protected TypeAmount $amount;
    protected TypeAmount $claim;
    protected ?string $location;
    protected TypeDateTime $lastAmountUpdate;

    public function getStockId(): int
    {
        return $this->stockId;
    }

    public function setStockId(int $stockId): static
    {
        $this->stockId = $stockId;
        return $this;
    }

    public function getAmount(): TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(TypeAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getClaim(): TypeAmount
    {
        return $this->claim;
    }

    public function setClaim(TypeAmount $claim): static
    {
        $this->claim = $claim;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getLastAmountUpdate(): TypeDateTime
    {
        return $this->lastAmountUpdate;
    }

    public function setLastAmountUpdate(TypeDateTime $lastAmountUpdate): static
    {
        $this->lastAmountUpdate = $lastAmountUpdate;
        return $this;
    }
}
