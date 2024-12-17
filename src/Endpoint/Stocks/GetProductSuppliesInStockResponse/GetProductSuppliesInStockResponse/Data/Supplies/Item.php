<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStockResponse\GetProductSuppliesInStockResponse\Data\Supplies;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected string $code;
    protected TypeAmount $amount;
    protected TypeAmount $claim;
    protected ?string $location;
    protected ?TypeDateTime $changeTime;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }
}
