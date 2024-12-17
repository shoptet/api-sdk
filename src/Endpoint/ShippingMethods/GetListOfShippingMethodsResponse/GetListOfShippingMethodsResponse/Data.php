<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethodsResponse\GetListOfShippingMethodsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethodsResponse\GetListOfShippingMethodsResponse\Data\ShippingMethods;

class Data extends Entity
{
    protected ShippingMethods $shippingMethods;
    protected bool $wholesaleActive;
    protected ?string $defaultRetailMethod;
    protected ?string $defaultWholesaleMethod;

    public function getShippingMethods(): ShippingMethods
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(ShippingMethods $shippingMethods): static
    {
        $this->shippingMethods = $shippingMethods;
        return $this;
    }

    public function isWholesaleActive(): bool
    {
        return $this->wholesaleActive;
    }

    public function setWholesaleActive(bool $wholesaleActive): static
    {
        $this->wholesaleActive = $wholesaleActive;
        return $this;
    }

    public function getDefaultRetailMethod(): ?string
    {
        return $this->defaultRetailMethod;
    }

    public function setDefaultRetailMethod(?string $defaultRetailMethod): static
    {
        $this->defaultRetailMethod = $defaultRetailMethod;
        return $this;
    }

    public function getDefaultWholesaleMethod(): ?string
    {
        return $this->defaultWholesaleMethod;
    }

    public function setDefaultWholesaleMethod(?string $defaultWholesaleMethod): static
    {
        $this->defaultWholesaleMethod = $defaultWholesaleMethod;
        return $this;
    }
}
