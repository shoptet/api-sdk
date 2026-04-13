<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\MeasureUnit;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants\Item\OssVatLevels;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants\Item\Parameters;
use Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants\Item\StocksLocations;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDimension;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVariantCodeRequest;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeightRequest;

class Item extends Entity
{
    protected ?TypeVariantCodeRequest $code;
    protected ?string $newCode;
    protected ?string $ean;
    protected ?int $unitId;
    protected ?TypeWeightRequest $weight;
    protected ?TypeDimension $width;
    protected ?TypeDimension $height;
    protected ?TypeDimension $depth;
    protected ?bool $visible;
    protected ?string $manufacturerCode;
    protected ?string $pluCode;
    protected ?string $isbn;
    protected ?string $serialNo;
    protected ?string $mpn;
    protected ?int $availabilityId;
    protected ?int $availabilityWhenSoldOutId;
    protected ?string $image;
    protected ?Parameters $parameters;
    protected ?TypePositiveAmountNullable $minStockSupply;
    protected ?StocksLocations $stocksLocations;
    protected ?bool $negativeStockAllowed;
    protected ?MeasureUnit $measureUnit;
    protected ?int $recyclingFeeId;
    protected ?int $consumptionTaxId;
    protected ?int $amountDecimalPlaces;
    protected ?bool $atypicalBilling;
    protected ?bool $atypicalShipping;
    protected ?bool $boxRestriction;
    protected ?OssVatLevels $ossVatLevels;

    public function getCode(): ?TypeVariantCodeRequest
    {
        return $this->code;
    }

    public function setCode(?TypeVariantCodeRequest $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getNewCode(): ?string
    {
        return $this->newCode;
    }

    public function setNewCode(?string $newCode): static
    {
        $this->newCode = $newCode;
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

    public function getAvailabilityId(): ?int
    {
        return $this->availabilityId;
    }

    public function setAvailabilityId(?int $availabilityId): static
    {
        $this->availabilityId = $availabilityId;
        return $this;
    }

    public function getAvailabilityWhenSoldOutId(): ?int
    {
        return $this->availabilityWhenSoldOutId;
    }

    public function setAvailabilityWhenSoldOutId(?int $availabilityWhenSoldOutId): static
    {
        $this->availabilityWhenSoldOutId = $availabilityWhenSoldOutId;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
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

    public function getMinStockSupply(): ?TypePositiveAmountNullable
    {
        return $this->minStockSupply;
    }

    public function setMinStockSupply(?TypePositiveAmountNullable $minStockSupply): static
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

    public function getConsumptionTaxId(): ?int
    {
        return $this->consumptionTaxId;
    }

    public function setConsumptionTaxId(?int $consumptionTaxId): static
    {
        $this->consumptionTaxId = $consumptionTaxId;
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

    public function getBoxRestriction(): ?bool
    {
        return $this->boxRestriction;
    }

    public function setBoxRestriction(?bool $boxRestriction): static
    {
        $this->boxRestriction = $boxRestriction;
        return $this;
    }

    public function getOssVatLevels(): ?OssVatLevels
    {
        return $this->ossVatLevels;
    }

    public function setOssVatLevels(?OssVatLevels $ossVatLevels): static
    {
        $this->ossVatLevels = $ossVatLevels;
        return $this;
    }
}
