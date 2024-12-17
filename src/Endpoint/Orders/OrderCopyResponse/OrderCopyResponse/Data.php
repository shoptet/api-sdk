<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyResponse\OrderCopyResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyResponse\OrderCopyResponse\Data\Order;

class Data extends Entity
{
    protected Order $order;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): static
    {
        $this->order = $order;
        return $this;
    }
}
