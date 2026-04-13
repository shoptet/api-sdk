<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ActionPrice extends Entity
{
    protected TypePrice $price;
    protected TypeDateNullable $fromDate;
    protected TypeDateNullable $toDate;

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getFromDate(): TypeDateNullable
    {
        return $this->fromDate;
    }

    public function setFromDate(TypeDateNullable $fromDate): static
    {
        $this->fromDate = $fromDate;
        return $this;
    }

    public function getToDate(): TypeDateNullable
    {
        return $this->toDate;
    }

    public function setToDate(TypeDateNullable $toDate): static
    {
        $this->toDate = $toDate;
        return $this;
    }
}
