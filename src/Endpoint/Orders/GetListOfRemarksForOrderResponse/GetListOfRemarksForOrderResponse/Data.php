<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse\Data\OrderHistory;

class Data extends Entity
{
    protected OrderHistory $orderHistory;

    public function getOrderHistory(): OrderHistory
    {
        return $this->orderHistory;
    }

    public function setOrderHistory(OrderHistory $orderHistory): static
    {
        $this->orderHistory = $orderHistory;
        return $this;
    }
}
