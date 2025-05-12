<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeNonEmptyString;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class RecyclingFee extends Entity
{
    protected TypeNonEmptyString $category;
    protected TypePriceNullable $fee;
    protected ?string $unit;

    public function getCategory(): TypeNonEmptyString
    {
        return $this->category;
    }

    public function setCategory(TypeNonEmptyString $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getFee(): TypePriceNullable
    {
        return $this->fee;
    }

    public function setFee(TypePriceNullable $fee): static
    {
        $this->fee = $fee;
        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): static
    {
        $this->unit = $unit;
        return $this;
    }
}
