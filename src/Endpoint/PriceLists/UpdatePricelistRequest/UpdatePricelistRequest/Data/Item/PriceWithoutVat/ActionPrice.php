<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\PriceWithoutVat;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class ActionPrice extends Entity
{
    protected ?TypePriceNullable $price;
    protected ?TypeDateNullable $fromDate;
    protected ?TypeDateNullable $toDate;

    public function getPrice(): ?TypePriceNullable
    {
        return $this->price;
    }

    public function setPrice(?TypePriceNullable $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getFromDate(): ?TypeDateNullable
    {
        return $this->fromDate;
    }

    public function setFromDate(?TypeDateNullable $fromDate): static
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    public function getToDate(): ?TypeDateNullable
    {
        return $this->toDate;
    }

    public function setToDate(?TypeDateNullable $toDate): static
    {
        $this->toDate = $toDate;
        return $this;
    }
}
