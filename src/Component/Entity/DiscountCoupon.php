<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;

class DiscountCoupon extends Entity
{
    protected string $code;
    protected TypeDateTime $creationTime;
    protected string $discountType;
    protected ?TypePrice $amount;
    protected ?TypePriceRatio $ratio;
    protected ?TypePrice $minPrice;
    protected ?TypeCurrencyCode $currency;
    protected TypeGuid $template;
    protected ?string $shippingPrice;
    protected TypeDate $validFrom;
    protected TypeDate $validTo;
    protected bool $reusable;
    protected int $usedCount;
    protected ?string $remark;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
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

    public function getAmount(): ?TypePrice
    {
        return $this->amount;
    }

    public function setAmount(?TypePrice $amount): static
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

    public function getMinPrice(): ?TypePrice
    {
        return $this->minPrice;
    }

    public function setMinPrice(?TypePrice $minPrice): static
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getCurrency(): ?TypeCurrencyCode
    {
        return $this->currency;
    }

    public function setCurrency(?TypeCurrencyCode $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getTemplate(): TypeGuid
    {
        return $this->template;
    }

    public function setTemplate(TypeGuid $template): static
    {
        $this->template = $template;
        return $this;
    }

    public function getShippingPrice(): ?string
    {
        return $this->shippingPrice;
    }

    public function setShippingPrice(?string $shippingPrice): static
    {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }

    public function getValidFrom(): TypeDate
    {
        return $this->validFrom;
    }

    public function setValidFrom(TypeDate $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo(): TypeDate
    {
        return $this->validTo;
    }

    public function setValidTo(TypeDate $validTo): static
    {
        $this->validTo = $validTo;
        return $this;
    }

    public function isReusable(): bool
    {
        return $this->reusable;
    }

    public function setReusable(bool $reusable): static
    {
        $this->reusable = $reusable;
        return $this;
    }

    public function getUsedCount(): int
    {
        return $this->usedCount;
    }

    public function setUsedCount(int $usedCount): static
    {
        $this->usedCount = $usedCount;
        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }
}
