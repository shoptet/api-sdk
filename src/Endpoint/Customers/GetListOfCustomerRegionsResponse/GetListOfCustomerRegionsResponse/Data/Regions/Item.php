<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegionsResponse\GetListOfCustomerRegionsResponse\Data\Regions;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected string $regionName;
    protected ?string $regionShortcut;
    protected string $countryCode;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getRegionName(): string
    {
        return $this->regionName;
    }

    public function setRegionName(string $regionName): static
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

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
