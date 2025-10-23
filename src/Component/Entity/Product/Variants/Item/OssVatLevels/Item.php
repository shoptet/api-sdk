<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item\OssVatLevels;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $countryCode;
    protected string $taxLevel;
    protected string $taxLevelDescription;
    protected ?string $taxValue;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getTaxLevel(): string
    {
        return $this->taxLevel;
    }

    public function setTaxLevel(string $taxLevel): static
    {
        $this->taxLevel = $taxLevel;
        return $this;
    }

    public function getTaxLevelDescription(): string
    {
        return $this->taxLevelDescription;
    }

    public function setTaxLevelDescription(string $taxLevelDescription): static
    {
        $this->taxLevelDescription = $taxLevelDescription;
        return $this;
    }

    public function getTaxValue(): ?string
    {
        return $this->taxValue;
    }

    public function setTaxValue(?string $taxValue): static
    {
        $this->taxValue = $taxValue;
        return $this;
    }
}
