<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetShippingMethodDetailResponse\GetShippingMethodDetailResponse\Data\PriceList\PriceTiers;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRateNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeightUnlimited;

class Item extends Entity
{
    protected string $countryCode;
    protected ?int $regionId;
    protected ?string $regionName;
    protected string $currencyCode;
    protected TypePriceNullable $priceFrom;
    protected TypePriceNullable $priceUntil;
    protected TypeWeightUnlimited $weightFrom;
    protected TypeWeightUnlimited $weightUntil;
    protected TypePrice $price;
    protected bool $includingVat;
    protected ?int $taxClassId;
    protected TypeVatRateNullable $vatRate;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    public function setRegionId(?int $regionId): static
    {
        $this->regionId = $regionId;
        return $this;
    }

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function setRegionName(?string $regionName): static
    {
        $this->regionName = $regionName;
        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getPriceFrom(): TypePriceNullable
    {
        return $this->priceFrom;
    }

    public function setPriceFrom(TypePriceNullable $priceFrom): static
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

    public function getPriceUntil(): TypePriceNullable
    {
        return $this->priceUntil;
    }

    public function setPriceUntil(TypePriceNullable $priceUntil): static
    {
        $this->priceUntil = $priceUntil;
        return $this;
    }

    public function getWeightFrom(): TypeWeightUnlimited
    {
        return $this->weightFrom;
    }

    public function setWeightFrom(TypeWeightUnlimited $weightFrom): static
    {
        $this->weightFrom = $weightFrom;
        return $this;
    }

    public function getWeightUntil(): TypeWeightUnlimited
    {
        return $this->weightUntil;
    }

    public function setWeightUntil(TypeWeightUnlimited $weightUntil): static
    {
        $this->weightUntil = $weightUntil;
        return $this;
    }

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }

    public function setTaxClassId(?int $taxClassId): static
    {
        $this->taxClassId = $taxClassId;
        return $this;
    }

    public function getVatRate(): TypeVatRateNullable
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRateNullable $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }
}
