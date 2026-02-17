<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest\Data\OrderCodes;

class Data extends Entity
{
    protected OrderCodes $orderCodes;
    protected float $statusId;

    public function getOrderCodes(): OrderCodes
    {
        return $this->orderCodes;
    }

    public function setOrderCodes(OrderCodes $orderCodes): static
    {
        $this->orderCodes = $orderCodes;
        return $this;
    }

    public function getStatusId(): float
    {
        return $this->statusId;
    }

    public function setStatusId(float $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }
}
