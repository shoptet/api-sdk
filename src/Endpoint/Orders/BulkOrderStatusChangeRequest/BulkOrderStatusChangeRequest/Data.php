<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest\Data\OrderCodes;

class Data extends Entity
{
    protected OrderCodes $orderCodes;
    protected int $statusId;

    public function getOrderCodes(): OrderCodes
    {
        return $this->orderCodes;
    }

    public function setOrderCodes(OrderCodes $orderCodes): static
    {
        $this->orderCodes = $orderCodes;
        return $this;
    }

    public function getStatusId(): int
    {
        return $this->statusId;
    }

    public function setStatusId(int $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }
}
