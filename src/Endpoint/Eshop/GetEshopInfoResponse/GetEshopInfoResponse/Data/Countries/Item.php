<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Countries;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $countryCode;
    protected string $countryName;
    protected ?string $companyIdPattern;
    protected ?string $companyIdExample;
    protected ?string $zipCodePattern;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryName(): string
    {
        return $this->countryName;
    }

    public function setCountryName(string $countryName): static
    {
        $this->countryName = $countryName;
        return $this;
    }

    public function getCompanyIdPattern(): ?string
    {
        return $this->companyIdPattern;
    }

    public function setCompanyIdPattern(?string $companyIdPattern): static
    {
        $this->companyIdPattern = $companyIdPattern;
        return $this;
    }

    public function getCompanyIdExample(): ?string
    {
        return $this->companyIdExample;
    }

    public function setCompanyIdExample(?string $companyIdExample): static
    {
        $this->companyIdExample = $companyIdExample;
        return $this;
    }

    public function getZipCodePattern(): ?string
    {
        return $this->zipCodePattern;
    }

    public function setZipCodePattern(?string $zipCodePattern): static
    {
        $this->zipCodePattern = $zipCodePattern;
        return $this;
    }
}
