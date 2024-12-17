<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Pricelist;

class Settings extends Entity
{
    protected bool $vatPayer;
    protected bool $cashDeskOnly;
    protected bool $trackStockClaims;
    protected int $maxProductAmount;
    protected int $maxEmailAmount;
    protected Pricelist $defaultPricelist;
    protected string $eshopLanguage;
    protected string $timezone;
    protected string $dateFormat;
    protected string $timeFormat;
    protected string $internals;
    protected bool $exchangeRateFlip;
    protected string $negativeStockAmount;
    protected ?bool $oss;

    public function isVatPayer(): bool
    {
        return $this->vatPayer;
    }

    public function setVatPayer(bool $vatPayer): static
    {
        $this->vatPayer = $vatPayer;
        return $this;
    }

    public function isCashDeskOnly(): bool
    {
        return $this->cashDeskOnly;
    }

    public function setCashDeskOnly(bool $cashDeskOnly): static
    {
        $this->cashDeskOnly = $cashDeskOnly;
        return $this;
    }

    public function isTrackStockClaims(): bool
    {
        return $this->trackStockClaims;
    }

    public function setTrackStockClaims(bool $trackStockClaims): static
    {
        $this->trackStockClaims = $trackStockClaims;
        return $this;
    }

    public function getMaxProductAmount(): int
    {
        return $this->maxProductAmount;
    }

    public function setMaxProductAmount(int $maxProductAmount): static
    {
        $this->maxProductAmount = $maxProductAmount;
        return $this;
    }

    public function getMaxEmailAmount(): int
    {
        return $this->maxEmailAmount;
    }

    public function setMaxEmailAmount(int $maxEmailAmount): static
    {
        $this->maxEmailAmount = $maxEmailAmount;
        return $this;
    }

    public function getDefaultPricelist(): Pricelist
    {
        return $this->defaultPricelist;
    }

    public function setDefaultPricelist(Pricelist $defaultPricelist): static
    {
        $this->defaultPricelist = $defaultPricelist;
        return $this;
    }

    public function getEshopLanguage(): string
    {
        return $this->eshopLanguage;
    }

    public function setEshopLanguage(string $eshopLanguage): static
    {
        $this->eshopLanguage = $eshopLanguage;
        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(string $dateFormat): static
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }

    public function getTimeFormat(): string
    {
        return $this->timeFormat;
    }

    public function setTimeFormat(string $timeFormat): static
    {
        $this->timeFormat = $timeFormat;
        return $this;
    }

    public function getInternals(): string
    {
        return $this->internals;
    }

    public function setInternals(string $internals): static
    {
        $this->internals = $internals;
        return $this;
    }

    public function isExchangeRateFlip(): bool
    {
        return $this->exchangeRateFlip;
    }

    public function setExchangeRateFlip(bool $exchangeRateFlip): static
    {
        $this->exchangeRateFlip = $exchangeRateFlip;
        return $this;
    }

    public function getNegativeStockAmount(): string
    {
        return $this->negativeStockAmount;
    }

    public function setNegativeStockAmount(string $negativeStockAmount): static
    {
        $this->negativeStockAmount = $negativeStockAmount;
        return $this;
    }

    public function getOss(): ?bool
    {
        return $this->oss;
    }

    public function setOss(?bool $oss): static
    {
        $this->oss = $oss;
        return $this;
    }
}
