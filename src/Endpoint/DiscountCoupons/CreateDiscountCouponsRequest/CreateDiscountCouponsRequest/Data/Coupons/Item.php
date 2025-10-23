<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsRequest\CreateDiscountCouponsRequest\Data\Coupons;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCodeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Item extends Entity
{
    protected ?string $code;
    protected string $discountType;
    protected ?TypePriceNullable $amount;
    protected ?string $ratio;
    protected ?TypePriceNullable $minPrice;
    protected ?TypeCurrencyCodeNullable $currency;
    protected TypeGuid $template;
    protected string $shippingPrice;
    protected ?TypeDateNullable $validFrom;
    protected ?TypeDateNullable $validTo;
    protected bool $reusable;
    protected ?string $remark;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
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

    public function getAmount(): ?TypePriceNullable
    {
        return $this->amount;
    }

    public function setAmount(?TypePriceNullable $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getRatio(): ?string
    {
        return $this->ratio;
    }

    public function setRatio(?string $ratio): static
    {
        $this->ratio = $ratio;
        return $this;
    }

    public function getMinPrice(): ?TypePriceNullable
    {
        return $this->minPrice;
    }

    public function setMinPrice(?TypePriceNullable $minPrice): static
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getCurrency(): ?TypeCurrencyCodeNullable
    {
        return $this->currency;
    }

    public function setCurrency(?TypeCurrencyCodeNullable $currency): static
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

    public function getShippingPrice(): string
    {
        return $this->shippingPrice;
    }

    public function setShippingPrice(string $shippingPrice): static
    {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }

    public function getValidFrom(): ?TypeDateNullable
    {
        return $this->validFrom;
    }

    public function setValidFrom(?TypeDateNullable $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo(): ?TypeDateNullable
    {
        return $this->validTo;
    }

    public function setValidTo(?TypeDateNullable $validTo): static
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
