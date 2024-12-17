<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data\Variants;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\MeasureUnit;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDimension;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeightRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data\Variants\Item\Parameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest\Data\Variants\Item\StocksLocations;

class Item extends Entity
{
    protected ?string $code;
    protected ?string $ean;
    protected ?int $unitId;
    protected ?TypeWeightRequest $weight;
    protected ?TypeDimension $width;
    protected ?TypeDimension $height;
    protected ?TypeDimension $depth;
    protected ?bool $visible;
    protected ?TypePrice $price;
    protected ?TypeCurrencyCode $currencyCode;
    protected ?string $manufacturerCode;
    protected ?string $pluCode;
    protected ?string $isbn;
    protected ?string $serialNo;
    protected ?string $mpn;
    protected ?float $availabilityId;
    protected ?float $availabilityWhenSoldOutId;
    protected ?Parameters $parameters;
    protected ?TypePositiveAmount $minStockSupply;
    protected ?StocksLocations $stocksLocations;
    protected ?bool $negativeStockAllowed;
    protected ?MeasureUnit $measureUnit;
    protected ?int $recyclingFeeId;
    protected ?int $amountDecimalPlaces;
    protected ?bool $atypicalBilling;
    protected ?bool $atypicalShipping;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): static
    {
        $this->ean = $ean;
        return $this;
    }

    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    public function setUnitId(?int $unitId): static
    {
        $this->unitId = $unitId;
        return $this;
    }

    public function getWeight(): ?TypeWeightRequest
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeightRequest $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWidth(): ?TypeDimension
    {
        return $this->width;
    }

    public function setWidth(?TypeDimension $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?TypeDimension
    {
        return $this->height;
    }

    public function setHeight(?TypeDimension $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth(): ?TypeDimension
    {
        return $this->depth;
    }

    public function setDepth(?TypeDimension $depth): static
    {
        $this->depth = $depth;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getPrice(): ?TypePrice
    {
        return $this->price;
    }

    public function setPrice(?TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCurrencyCode(): ?TypeCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?TypeCurrencyCode $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getManufacturerCode(): ?string
    {
        return $this->manufacturerCode;
    }

    public function setManufacturerCode(?string $manufacturerCode): static
    {
        $this->manufacturerCode = $manufacturerCode;
        return $this;
    }

    public function getPluCode(): ?string
    {
        return $this->pluCode;
    }

    public function setPluCode(?string $pluCode): static
    {
        $this->pluCode = $pluCode;
        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): static
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getSerialNo(): ?string
    {
        return $this->serialNo;
    }

    public function setSerialNo(?string $serialNo): static
    {
        $this->serialNo = $serialNo;
        return $this;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(?string $mpn): static
    {
        $this->mpn = $mpn;
        return $this;
    }

    public function getAvailabilityId(): ?float
    {
        return $this->availabilityId;
    }

    public function setAvailabilityId(?float $availabilityId): static
    {
        $this->availabilityId = $availabilityId;
        return $this;
    }

    public function getAvailabilityWhenSoldOutId(): ?float
    {
        return $this->availabilityWhenSoldOutId;
    }

    public function setAvailabilityWhenSoldOutId(?float $availabilityWhenSoldOutId): static
    {
        $this->availabilityWhenSoldOutId = $availabilityWhenSoldOutId;
        return $this;
    }

    public function getParameters(): ?Parameters
    {
        return $this->parameters;
    }

    public function setParameters(?Parameters $parameters): static
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function getMinStockSupply(): ?TypePositiveAmount
    {
        return $this->minStockSupply;
    }

    public function setMinStockSupply(?TypePositiveAmount $minStockSupply): static
    {
        $this->minStockSupply = $minStockSupply;
        return $this;
    }

    public function getStocksLocations(): ?StocksLocations
    {
        return $this->stocksLocations;
    }

    public function setStocksLocations(?StocksLocations $stocksLocations): static
    {
        $this->stocksLocations = $stocksLocations;
        return $this;
    }

    public function getNegativeStockAllowed(): ?bool
    {
        return $this->negativeStockAllowed;
    }

    public function setNegativeStockAllowed(?bool $negativeStockAllowed): static
    {
        $this->negativeStockAllowed = $negativeStockAllowed;
        return $this;
    }

    public function getMeasureUnit(): ?MeasureUnit
    {
        return $this->measureUnit;
    }

    public function setMeasureUnit(?MeasureUnit $measureUnit): static
    {
        $this->measureUnit = $measureUnit;
        return $this;
    }

    public function getRecyclingFeeId(): ?int
    {
        return $this->recyclingFeeId;
    }

    public function setRecyclingFeeId(?int $recyclingFeeId): static
    {
        $this->recyclingFeeId = $recyclingFeeId;
        return $this;
    }

    public function getAmountDecimalPlaces(): ?int
    {
        return $this->amountDecimalPlaces;
    }

    public function setAmountDecimalPlaces(?int $amountDecimalPlaces): static
    {
        $this->amountDecimalPlaces = $amountDecimalPlaces;
        return $this;
    }

    public function getAtypicalBilling(): ?bool
    {
        return $this->atypicalBilling;
    }

    public function setAtypicalBilling(?bool $atypicalBilling): static
    {
        $this->atypicalBilling = $atypicalBilling;
        return $this;
    }

    public function getAtypicalShipping(): ?bool
    {
        return $this->atypicalShipping;
    }

    public function setAtypicalShipping(?bool $atypicalShipping): static
    {
        $this->atypicalShipping = $atypicalShipping;
        return $this;
    }
}
