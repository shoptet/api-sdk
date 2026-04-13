<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\CartPrice;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;

class Cart extends Entity
{
    protected CartPrice $price;
    protected TypeCurrencyCode $currency;
    protected ?bool $freeShipping;

    public function getPrice(): CartPrice
    {
        return $this->price;
    }

    public function setPrice(CartPrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getCurrency(): TypeCurrencyCode
    {
        return $this->currency;
    }

    public function setCurrency(TypeCurrencyCode $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getFreeShipping(): ?bool
    {
        return $this->freeShipping;
    }

    public function setFreeShipping(?bool $freeShipping): static
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }
}
