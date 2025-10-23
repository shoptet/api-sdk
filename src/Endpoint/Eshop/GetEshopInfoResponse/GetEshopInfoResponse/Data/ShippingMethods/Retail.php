<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ShippingMethods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ShippingMethods\Retail\Methods;

class Retail extends Entity
{
    protected Methods $methods;
    protected ?string $defaultShipping;

    public function getMethods(): Methods
    {
        return $this->methods;
    }

    public function setMethods(Methods $methods): static
    {
        $this->methods = $methods;
        return $this;
    }

    public function getDefaultShipping(): ?string
    {
        return $this->defaultShipping;
    }

    public function setDefaultShipping(?string $defaultShipping): static
    {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }
}
