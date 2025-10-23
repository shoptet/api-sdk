<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class PricelistDetail extends Entity
{
    protected string $code;
    protected TypeCurrencyCode $currencyCode;
    protected bool $includingVat;
    protected TypeVatRate $vatRate;
    protected VariantPrice $price;
    protected ProductOrderableAmount $orderableAmount;
    protected PriceSales $sales;
    protected ?ProductPrices $prices;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getCurrencyCode(): TypeCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(TypeCurrencyCode $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
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

    public function getVatRate(): TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getPrice(): VariantPrice
    {
        return $this->price;
    }

    public function setPrice(VariantPrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getOrderableAmount(): ProductOrderableAmount
    {
        return $this->orderableAmount;
    }

    public function setOrderableAmount(ProductOrderableAmount $orderableAmount): static
    {
        $this->orderableAmount = $orderableAmount;
        return $this;
    }

    public function getSales(): PriceSales
    {
        return $this->sales;
    }

    public function setSales(PriceSales $sales): static
    {
        $this->sales = $sales;
        return $this;
    }

    public function getPrices(): ?ProductPrices
    {
        return $this->prices;
    }

    public function setPrices(?ProductPrices $prices): static
    {
        $this->prices = $prices;
        return $this;
    }
}
