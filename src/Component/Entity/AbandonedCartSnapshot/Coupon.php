<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\AbandonedCartSnapshot;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;

class Coupon extends Entity
{
    protected string $code;
    protected string $discountType;
    protected TypePriceNullable $amount;
    protected ?TypePriceRatio $ratio;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function getAmount(): TypePriceNullable
    {
        return $this->amount;
    }

    public function setAmount(TypePriceNullable $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getRatio(): ?TypePriceRatio
    {
        return $this->ratio;
    }

    public function setRatio(?TypePriceRatio $ratio): static
    {
        $this->ratio = $ratio;
        return $this;
    }
}
