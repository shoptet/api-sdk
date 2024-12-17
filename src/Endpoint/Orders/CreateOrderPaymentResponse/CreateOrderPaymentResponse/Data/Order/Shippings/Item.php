<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPaymentResponse\CreateOrderPaymentResponse\Data\Order\Shippings;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPaymentResponse\CreateOrderPaymentResponse\Data\Order\Shippings\Item\Shipping;

class Item extends Entity
{
    protected Shipping $shipping;
    protected float $itemId;

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): static
    {
        $this->shipping = $shipping;
        return $this;
    }

    public function getItemId(): float
    {
        return $this->itemId;
    }

    public function setItemId(float $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }
}
