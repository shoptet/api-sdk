<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\Price;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ActionPrice extends Entity
{
    protected ?TypePrice $price;
    protected ?TypeDate $fromDate;
    protected ?TypeDate $toDate;

    public function getPrice(): ?TypePrice
    {
        return $this->price;
    }

    public function setPrice(?TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getFromDate(): ?TypeDate
    {
        return $this->fromDate;
    }

    public function setFromDate(?TypeDate $fromDate): static
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    public function getToDate(): ?TypeDate
    {
        return $this->toDate;
    }

    public function setToDate(?TypeDate $toDate): static
    {
        $this->toDate = $toDate;
        return $this;
    }
}
