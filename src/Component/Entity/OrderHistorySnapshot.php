<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class OrderHistorySnapshot extends OrderHistory
{
    protected string $orderCode;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }
}
