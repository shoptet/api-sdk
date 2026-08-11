<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetShippingMethodDetailResponse\GetShippingMethodDetailResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetShippingMethodDetailResponse\GetShippingMethodDetailResponse\Data\PriceList\PairedPaymentMethodGuids;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetShippingMethodDetailResponse\GetShippingMethodDetailResponse\Data\PriceList\PriceTiers;

class PriceList extends Entity
{
    protected bool $allowFreeShipping;
    protected PriceTiers $priceTiers;
    protected PairedPaymentMethodGuids $pairedPaymentMethodGuids;

    public function isAllowFreeShipping(): bool
    {
        return $this->allowFreeShipping;
    }

    public function setAllowFreeShipping(bool $allowFreeShipping): static
    {
        $this->allowFreeShipping = $allowFreeShipping;
        return $this;
    }

    public function getPriceTiers(): PriceTiers
    {
        return $this->priceTiers;
    }

    public function setPriceTiers(PriceTiers $priceTiers): static
    {
        $this->priceTiers = $priceTiers;
        return $this;
    }

    public function getPairedPaymentMethodGuids(): PairedPaymentMethodGuids
    {
        return $this->pairedPaymentMethodGuids;
    }

    public function setPairedPaymentMethodGuids(PairedPaymentMethodGuids $pairedPaymentMethodGuids): static
    {
        $this->pairedPaymentMethodGuids = $pairedPaymentMethodGuids;
        return $this;
    }
}
