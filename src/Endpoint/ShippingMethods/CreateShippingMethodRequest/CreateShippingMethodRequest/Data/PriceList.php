<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data\PriceList\PairedPaymentMethodGuids;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest\Data\PriceList\PriceTiers;

class PriceList extends Entity
{
    protected ?bool $allowFreeShipping;
    protected ?PairedPaymentMethodGuids $pairedPaymentMethodGuids;
    protected ?PriceTiers $priceTiers;

    public function getAllowFreeShipping(): ?bool
    {
        return $this->allowFreeShipping;
    }

    public function setAllowFreeShipping(?bool $allowFreeShipping): static
    {
        $this->allowFreeShipping = $allowFreeShipping;
        return $this;
    }

    public function getPairedPaymentMethodGuids(): ?PairedPaymentMethodGuids
    {
        return $this->pairedPaymentMethodGuids;
    }

    public function setPairedPaymentMethodGuids(?PairedPaymentMethodGuids $pairedPaymentMethodGuids): static
    {
        $this->pairedPaymentMethodGuids = $pairedPaymentMethodGuids;
        return $this;
    }

    public function getPriceTiers(): ?PriceTiers
    {
        return $this->priceTiers;
    }

    public function setPriceTiers(?PriceTiers $priceTiers): static
    {
        $this->priceTiers = $priceTiers;
        return $this;
    }
}
