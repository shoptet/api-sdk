<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodResponse\CreateShippingMethodResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodResponse\CreateShippingMethodResponse\Data\ShippingCompany;

class Data extends Entity
{
    protected TypeGuid $guid;
    protected string $name;
    protected ?string $description;
    protected bool $visibility;
    protected bool $wholesale;
    protected ?string $logoUrl;
    protected ShippingCompany $shippingCompany;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function isVisibility(): bool
    {
        return $this->visibility;
    }

    public function setVisibility(bool $visibility): static
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function isWholesale(): bool
    {
        return $this->wholesale;
    }

    public function setWholesale(bool $wholesale): static
    {
        $this->wholesale = $wholesale;
        return $this;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): static
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    public function getShippingCompany(): ShippingCompany
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany(ShippingCompany $shippingCompany): static
    {
        $this->shippingCompany = $shippingCompany;
        return $this;
    }
}
