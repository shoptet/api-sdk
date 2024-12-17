<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderShippingResponse\UpdateOrderShippingResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderItem;

class Data extends Entity
{
    protected OrderItem $orderItem;

    public function getOrderItem(): OrderItem
    {
        return $this->orderItem;
    }

    public function setOrderItem(OrderItem $orderItem): static
    {
        $this->orderItem = $orderItem;
        return $this;
    }
}
