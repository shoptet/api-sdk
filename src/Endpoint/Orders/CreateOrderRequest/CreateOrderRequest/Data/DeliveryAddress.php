<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class DeliveryAddress extends Entity
{
    protected ?string $company;
    protected ?string $fullName;
    protected ?string $street;
    protected ?string $streetWithNr;
    protected ?string $houseNumber;
    protected ?string $city;
    protected ?string $district;
    protected ?string $additional;
    protected ?string $zip;
    protected ?string $countryCode;
    protected ?string $regionName;
    protected ?string $regionShortcut;

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): static
    {
        $this->company = $company;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function getStreetWithNr(): ?string
    {
        return $this->streetWithNr;
    }

    public function setStreetWithNr(?string $streetWithNr): static
    {
        $this->streetWithNr = $streetWithNr;
        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): static
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): static
    {
        $this->district = $district;
        return $this;
    }

    public function getAdditional(): ?string
    {
        return $this->additional;
    }

    public function setAdditional(?string $additional): static
    {
        $this->additional = $additional;
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): static
    {
        $this->zip = $zip;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function setRegionName(?string $regionName): static
    {
        $this->regionName = $regionName;
        return $this;
    }

    public function getRegionShortcut(): ?string
    {
        return $this->regionShortcut;
    }

    public function setRegionShortcut(?string $regionShortcut): static
    {
        $this->regionShortcut = $regionShortcut;
        return $this;
    }
}
