<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\OrderableAmount;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\Price;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\PriceWithVat;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\PriceWithoutVat;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\Prices;
use Shoptet\Api\Sdk\Php\Component\Entity\PricelistUpdate\Item\Sales;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRateNullable;

class Item extends Entity
{
    protected string $code;
    protected ?string $currencyCode;
    protected ?TypeVatRateNullable $vatRate;
    protected ?bool $includingVat;
    protected ?OrderableAmount $orderableAmount;
    protected ?Sales $sales;
    protected ?Price $price;
    protected ?PriceWithVat $priceWithVat;
    protected ?PriceWithoutVat $priceWithoutVat;
    protected ?Prices $prices;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getVatRate(): ?TypeVatRateNullable
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypeVatRateNullable $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getOrderableAmount(): ?OrderableAmount
    {
        return $this->orderableAmount;
    }

    public function setOrderableAmount(?OrderableAmount $orderableAmount): static
    {
        $this->orderableAmount = $orderableAmount;
        return $this;
    }

    public function getSales(): ?Sales
    {
        return $this->sales;
    }

    public function setSales(?Sales $sales): static
    {
        $this->sales = $sales;
        return $this;
    }

    public function getPrice(): ?Price
    {
        return $this->price;
    }

    public function setPrice(?Price $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getPriceWithVat(): ?PriceWithVat
    {
        return $this->priceWithVat;
    }

    public function setPriceWithVat(?PriceWithVat $priceWithVat): static
    {
        $this->priceWithVat = $priceWithVat;
        return $this;
    }

    public function getPriceWithoutVat(): ?PriceWithoutVat
    {
        return $this->priceWithoutVat;
    }

    public function setPriceWithoutVat(?PriceWithoutVat $priceWithoutVat): static
    {
        $this->priceWithoutVat = $priceWithoutVat;
        return $this;
    }

    public function getPrices(): ?Prices
    {
        return $this->prices;
    }

    public function setPrices(?Prices $prices): static
    {
        $this->prices = $prices;
        return $this;
    }
}
