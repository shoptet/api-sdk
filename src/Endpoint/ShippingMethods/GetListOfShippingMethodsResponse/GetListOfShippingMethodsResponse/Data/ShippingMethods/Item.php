<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethodsResponse\GetListOfShippingMethodsResponse\Data\ShippingMethods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethodsResponse\GetListOfShippingMethodsResponse\Data\ShippingMethods\Item\ShippingCompany;

class Item extends Entity
{
    protected TypeGuid $guid;
    protected string $name;
    protected ?string $description;
    protected ?ShippingCompany $shippingCompany;
    protected ?string $trackingUrl;
    protected bool $visible;
    protected int $priority;
    protected bool $wholesale;
    protected ?string $logoUrl;

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

    public function getShippingCompany(): ?ShippingCompany
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany(?ShippingCompany $shippingCompany): static
    {
        $this->shippingCompany = $shippingCompany;
        return $this;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(?string $trackingUrl): static
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): static
    {
        $this->priority = $priority;
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
}
