<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\OnlineStore\Countries;

class OnlineStore extends Entity
{
    protected int $id;
    protected ?string $name;
    protected string $status;
    protected ?string $domain;
    protected ?string $domainSetupMethod;
    protected ?string $addressFormat;
    protected ?string $timezone;
    protected ?OnlineStoreCountry $defaultCountry;
    protected ?Countries $countries;
    protected ?SalesChannel $salesChannel;
    protected bool $isPasswordProtected;
    protected bool $isPrimary;
    protected ?OnlineStoreDesign $design;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): static
    {
        $this->domain = $domain;
        return $this;
    }

    public function getDomainSetupMethod(): ?string
    {
        return $this->domainSetupMethod;
    }

    public function setDomainSetupMethod(?string $domainSetupMethod): static
    {
        $this->domainSetupMethod = $domainSetupMethod;
        return $this;
    }

    public function getAddressFormat(): ?string
    {
        return $this->addressFormat;
    }

    public function setAddressFormat(?string $addressFormat): static
    {
        $this->addressFormat = $addressFormat;
        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function getDefaultCountry(): ?OnlineStoreCountry
    {
        return $this->defaultCountry;
    }

    public function setDefaultCountry(?OnlineStoreCountry $defaultCountry): static
    {
        $this->defaultCountry = $defaultCountry;
        return $this;
    }

    public function getCountries(): ?Countries
    {
        return $this->countries;
    }

    public function setCountries(?Countries $countries): static
    {
        $this->countries = $countries;
        return $this;
    }

    public function getSalesChannel(): ?SalesChannel
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannel $salesChannel): static
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }

    public function isIsPasswordProtected(): bool
    {
        return $this->isPasswordProtected;
    }

    public function setIsPasswordProtected(bool $isPasswordProtected): static
    {
        $this->isPasswordProtected = $isPasswordProtected;
        return $this;
    }

    public function isIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): static
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    public function getDesign(): ?OnlineStoreDesign
    {
        return $this->design;
    }

    public function setDesign(?OnlineStoreDesign $design): static
    {
        $this->design = $design;
        return $this;
    }
}
