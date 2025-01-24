<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data2\Logo;

class Data2 extends Entity
{
    protected string $name;
    protected ?string $description;

    /** @deprecated */
    protected ?string $shippingCompanyCode;
    protected string $shippingMethodCode;
    protected ?bool $visibility;
    protected ?bool $wholesale;
    protected ?Logo $logo;
    protected ?TypePrice $minimalShippingPrice;

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

    /**
     * @deprecated
     */
    public function getShippingCompanyCode(): ?string
    {
        return $this->shippingCompanyCode;
    }

    /**
     * @deprecated
     */
    public function setShippingCompanyCode(?string $shippingCompanyCode): static
    {
        $this->shippingCompanyCode = $shippingCompanyCode;
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

    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

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

    public function getLogo(): ?Logo
    {
        return $this->logo;
    }

    public function setLogo(?Logo $logo): static
    {
        $this->logo = $logo;
        return $this;
    }

    public function getMinimalShippingPrice(): ?TypePrice
    {
        return $this->minimalShippingPrice;
    }

    public function setMinimalShippingPrice(?TypePrice $minimalShippingPrice): static
    {
        $this->minimalShippingPrice = $minimalShippingPrice;
        return $this;
    }
}
