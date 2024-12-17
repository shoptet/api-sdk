<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants;

use Shoptet\Api\Sdk\Php\Component\Entity\ActionPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\AvailabilityShort;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\MeasureUnit;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\Parameters;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\PerPricelistPrices;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\PerStockAmounts;
use Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\ZboziCZ;
use Shoptet\Api\Sdk\Php\Component\Entity\RecyclingFeeCategory;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDimension;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeWeight;

class Item extends Entity
{
    protected string $code;
    protected ?string $ean;
    protected ?TypeAmount $stock;
    protected ?string $unit;
    protected ?TypeWeight $weight;
    protected TypeDimension $width;
    protected TypeDimension $height;
    protected TypeDimension $depth;
    protected bool $visible;
    protected TypePrice $price;
    protected TypePrice $commonPrice;
    protected ?string $manufacturerCode;
    protected ?string $pluCode;
    protected ?string $isbn;
    protected ?string $serialNo;
    protected ?string $mpn;
    protected bool $includingVat;
    protected string $vatRate;
    protected string $currencyCode;
    protected ?TypeAmount $minStockSupply;
    protected ?ActionPrice $actionPrice;
    protected ?string $image;
    protected ?bool $isProductDefaultImage;
    protected ?string $name;
    protected int $amountDecimalPlaces;
    protected ?Parameters $parameters;
    protected ?MeasureUnit $measureUnit;
    protected ?AvailabilityShort $availability;
    protected ?AvailabilityShort $availabilityWhenSoldOut;
    protected string $negativeStockAllowed;
    protected ?RecyclingFeeCategory $recyclingFee;
    protected ?string $heurekaCPC;
    protected ?ZboziCZ $zboziCZ;
    protected ?bool $atypicalBilling;
    protected ?bool $atypicalShipping;
    protected ?PerStockAmounts $perStockAmounts;
    protected ?PerPricelistPrices $perPricelistPrices;
    protected ?string $url;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
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

    public function getStock(): ?TypeAmount
    {
        return $this->stock;
    }

    public function setStock(?TypeAmount $stock): static
    {
        $this->stock = $stock;
        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): static
    {
        $this->unit = $unit;
        return $this;
    }

    public function getWeight(): ?TypeWeight
    {
        return $this->weight;
    }

    public function setWeight(?TypeWeight $weight): static
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWidth(): TypeDimension
    {
        return $this->width;
    }

    public function setWidth(TypeDimension $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): TypeDimension
    {
        return $this->height;
    }

    public function setHeight(TypeDimension $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth(): TypeDimension
    {
        return $this->depth;
    }

    public function setDepth(TypeDimension $depth): static
    {
        $this->depth = $depth;
        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;
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

    public function getCommonPrice(): TypePrice
    {
        return $this->commonPrice;
    }

    public function setCommonPrice(TypePrice $commonPrice): static
    {
        $this->commonPrice = $commonPrice;
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

    public function isIncludingVat(): bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }

    public function getVatRate(): string
    {
        return $this->vatRate;
    }

    public function setVatRate(string $vatRate): static
    {
        $this->vatRate = $vatRate;
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

    public function getMinStockSupply(): ?TypeAmount
    {
        return $this->minStockSupply;
    }

    public function setMinStockSupply(?TypeAmount $minStockSupply): static
    {
        $this->minStockSupply = $minStockSupply;
        return $this;
    }

    public function getActionPrice(): ?ActionPrice
    {
        return $this->actionPrice;
    }

    public function setActionPrice(?ActionPrice $actionPrice): static
    {
        $this->actionPrice = $actionPrice;
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

    public function getIsProductDefaultImage(): ?bool
    {
        return $this->isProductDefaultImage;
    }

    public function setIsProductDefaultImage(?bool $isProductDefaultImage): static
    {
        $this->isProductDefaultImage = $isProductDefaultImage;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getAmountDecimalPlaces(): int
    {
        return $this->amountDecimalPlaces;
    }

    public function setAmountDecimalPlaces(int $amountDecimalPlaces): static
    {
        $this->amountDecimalPlaces = $amountDecimalPlaces;
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

    public function getMeasureUnit(): ?MeasureUnit
    {
        return $this->measureUnit;
    }

    public function setMeasureUnit(?MeasureUnit $measureUnit): static
    {
        $this->measureUnit = $measureUnit;
        return $this;
    }

    public function getAvailability(): ?AvailabilityShort
    {
        return $this->availability;
    }

    public function setAvailability(?AvailabilityShort $availability): static
    {
        $this->availability = $availability;
        return $this;
    }

    public function getAvailabilityWhenSoldOut(): ?AvailabilityShort
    {
        return $this->availabilityWhenSoldOut;
    }

    public function setAvailabilityWhenSoldOut(?AvailabilityShort $availabilityWhenSoldOut): static
    {
        $this->availabilityWhenSoldOut = $availabilityWhenSoldOut;
        return $this;
    }

    public function getNegativeStockAllowed(): string
    {
        return $this->negativeStockAllowed;
    }

    public function setNegativeStockAllowed(string $negativeStockAllowed): static
    {
        $this->negativeStockAllowed = $negativeStockAllowed;
        return $this;
    }

    public function getRecyclingFee(): ?RecyclingFeeCategory
    {
        return $this->recyclingFee;
    }

    public function setRecyclingFee(?RecyclingFeeCategory $recyclingFee): static
    {
        $this->recyclingFee = $recyclingFee;
        return $this;
    }

    public function getHeurekaCPC(): ?string
    {
        return $this->heurekaCPC;
    }

    public function setHeurekaCPC(?string $heurekaCPC): static
    {
        $this->heurekaCPC = $heurekaCPC;
        return $this;
    }

    public function getZboziCZ(): ?ZboziCZ
    {
        return $this->zboziCZ;
    }

    public function setZboziCZ(?ZboziCZ $zboziCZ): static
    {
        $this->zboziCZ = $zboziCZ;
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

    public function getPerStockAmounts(): ?PerStockAmounts
    {
        return $this->perStockAmounts;
    }

    public function setPerStockAmounts(?PerStockAmounts $perStockAmounts): static
    {
        $this->perStockAmounts = $perStockAmounts;
        return $this;
    }

    public function getPerPricelistPrices(): ?PerPricelistPrices
    {
        return $this->perPricelistPrices;
    }

    public function setPerPricelistPrices(?PerPricelistPrices $perPricelistPrices): static
    {
        $this->perPricelistPrices = $perPricelistPrices;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }
}
