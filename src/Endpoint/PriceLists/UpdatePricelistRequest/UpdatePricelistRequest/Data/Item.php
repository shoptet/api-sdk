<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\OrderableAmount;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\Price;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\PriceWithVat;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\PriceWithoutVat;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest\Data\Item\Sales;

class Item extends Entity
{
    protected string $code;
    protected ?string $currencyCode;
    protected ?TypePrice $vatRate;
    protected ?bool $includingVat;
    protected ?OrderableAmount $orderableAmount;
    protected ?Sales $sales;
    protected ?Price $price;
    protected ?PriceWithVat $priceWithVat;
    protected ?PriceWithoutVat $priceWithoutVat;

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

    public function getVatRate(): ?TypePrice
    {
        return $this->vatRate;
    }

    public function setVatRate(?TypePrice $vatRate): static
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
}
