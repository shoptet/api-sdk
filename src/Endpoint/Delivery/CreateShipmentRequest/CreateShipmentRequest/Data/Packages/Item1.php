<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item1 extends Entity
{
    protected int $orderPackagingId;

    public function getOrderPackagingId(): int
    {
        return $this->orderPackagingId;
    }

    public function setOrderPackagingId(int $orderPackagingId): static
    {
        $this->orderPackagingId = $orderPackagingId;
        return $this;
    }
}
