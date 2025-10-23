<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants\Item\OssVatLevels;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $countryCode;
    protected string $taxLevel;

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
}
