<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data\Cart;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data\Eshop;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data\Items;

class Data extends Entity
{
    protected Eshop $eshop;
    protected ?Cart $cart;
    protected Items $items;

    public function getEshop(): Eshop
    {
        return $this->eshop;
    }

    public function setEshop(Eshop $eshop): static
    {
        $this->eshop = $eshop;
        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): static
    {
        $this->cart = $cart;
        return $this;
    }

    public function getItems(): Items
    {
        return $this->items;
    }

    public function setItems(Items $items): static
    {
        $this->items = $items;
        return $this;
    }
}
