<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data\Logo;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data\PriceList;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data\SalesChannelGuids;

class Data extends Entity
{
    protected string $name;
    protected ?string $description;
    protected string $shippingMethodCode;
    protected ?bool $visible;

    /** @deprecated */
    protected ?bool $visibility;
    protected ?bool $wholesale;
    protected ?int $priority;
    protected ?bool $atypicalProductAllowed;
    protected ?string $cPostBoxSize;
    protected ?SalesChannelGuids $salesChannelGuids;
    protected ?Logo $logo;

    /** @deprecated */
    protected ?TypePriceNullable $minimalShippingPrice;
    protected ?PriceList $priceList;

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

    public function getShippingMethodCode(): string
    {
        return $this->shippingMethodCode;
    }

    public function setShippingMethodCode(string $shippingMethodCode): static
    {
        $this->shippingMethodCode = $shippingMethodCode;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

    /**
     * @deprecated
     */
    public function setVisibility(?bool $visibility): static
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getWholesale(): ?bool
    {
        return $this->wholesale;
    }

    public function setWholesale(?bool $wholesale): static
    {
        $this->wholesale = $wholesale;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getAtypicalProductAllowed(): ?bool
    {
        return $this->atypicalProductAllowed;
    }

    public function setAtypicalProductAllowed(?bool $atypicalProductAllowed): static
    {
        $this->atypicalProductAllowed = $atypicalProductAllowed;
        return $this;
    }

    public function getCPostBoxSize(): ?string
    {
        return $this->cPostBoxSize;
    }

    public function setCPostBoxSize(?string $cPostBoxSize): static
    {
        $this->cPostBoxSize = $cPostBoxSize;
        return $this;
    }

    public function getSalesChannelGuids(): ?SalesChannelGuids
    {
        return $this->salesChannelGuids;
    }

    public function setSalesChannelGuids(?SalesChannelGuids $salesChannelGuids): static
    {
        $this->salesChannelGuids = $salesChannelGuids;
        return $this;
    }

    public function getLogo(): ?Logo
    {
        return $this->logo;
    }

    public function setLogo(?Logo $logo): static
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getMinimalShippingPrice(): ?TypePriceNullable
    {
        return $this->minimalShippingPrice;
    }

    /**
     * @deprecated
     */
    public function setMinimalShippingPrice(?TypePriceNullable $minimalShippingPrice): static
    {
        $this->minimalShippingPrice = $minimalShippingPrice;
        return $this;
    }

    public function getPriceList(): ?PriceList
    {
        return $this->priceList;
    }

    public function setPriceList(?PriceList $priceList): static
    {
        $this->priceList = $priceList;
        return $this;
    }
}
