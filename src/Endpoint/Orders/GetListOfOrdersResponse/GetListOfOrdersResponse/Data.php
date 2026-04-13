<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders;

class Data extends Entity
{
    protected Orders $orders;
    protected Paginator $paginator;

    public function getOrders(): Orders
    {
        return $this->orders;
    }

    public function setOrders(Orders $orders): static
    {
        $this->orders = $orders;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}
