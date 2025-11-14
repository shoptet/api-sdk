<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscountSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscountSettingsResponse\Item\DiscountValue;

class Item extends Entity
{
    protected int $amountFrom;
    protected string $discountType;
    protected DiscountValue $discountValue;

    public function getAmountFrom(): int
    {
        return $this->amountFrom;
    }

    public function setAmountFrom(int $amountFrom): static
    {
        $this->amountFrom = $amountFrom;
        return $this;
    }

    public function getDiscountType(): string
    {
        return $this->discountType;
    }

    public function setDiscountType(string $discountType): static
    {
        $this->discountType = $discountType;
        return $this;
    }

    public function getDiscountValue(): DiscountValue
    {
        return $this->discountValue;
    }

    public function setDiscountValue(DiscountValue $discountValue): static
    {
        $this->discountValue = $discountValue;
        return $this;
    }
}
