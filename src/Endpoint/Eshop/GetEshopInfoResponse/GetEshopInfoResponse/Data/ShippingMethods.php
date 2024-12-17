<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ShippingMethods\Retail;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ShippingMethods\Wholesale;

class ShippingMethods extends Entity
{
    protected Retail $retail;
    protected Wholesale $wholesale;
    protected bool $wholesaleActive;

    public function getRetail(): Retail
    {
        return $this->retail;
    }

    public function setRetail(Retail $retail): static
    {
        $this->retail = $retail;
        return $this;
    }

    public function getWholesale(): Wholesale
    {
        return $this->wholesale;
    }

    public function setWholesale(Wholesale $wholesale): static
    {
        $this->wholesale = $wholesale;
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
}
