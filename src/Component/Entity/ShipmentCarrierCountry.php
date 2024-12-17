<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ShipmentCarrierCountry extends Entity
{
    protected string $countryCode;
    protected ?TypePrice $maxCod;
    protected ?string $codCurrencyCode;
    protected int $maxWeight;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getMaxCod(): ?TypePrice
    {
        return $this->maxCod;
    }

    public function setMaxCod(?TypePrice $maxCod): static
    {
        $this->maxCod = $maxCod;
        return $this;
    }

    public function getCodCurrencyCode(): ?string
    {
        return $this->codCurrencyCode;
    }

    public function setCodCurrencyCode(?string $codCurrencyCode): static
    {
        $this->codCurrencyCode = $codCurrencyCode;
        return $this;
    }

    public function getMaxWeight(): int
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(int $maxWeight): static
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }
}
