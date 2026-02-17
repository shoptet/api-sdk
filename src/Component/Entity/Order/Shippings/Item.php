<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Order\Shippings;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Order\Shippings\Item\Shipping;

class Item extends Entity
{
    protected Shipping $shipping;
    protected int $itemId;

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): static
    {
        $this->shipping = $shipping;
        return $this;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): static
    {
        $this->itemId = $itemId;
        return $this;
    }
}
