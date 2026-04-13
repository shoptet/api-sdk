<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\BillingInformation;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Address extends Entity
{
    protected ?string $streetAddress;
    protected ?string $city;
    protected ?string $zip;

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): static
    {
        $this->streetAddress = $streetAddress;
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

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): static
    {
        $this->zip = $zip;
        return $this;
    }
}
