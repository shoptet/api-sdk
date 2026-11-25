<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderClaimsResponse\GetOrderClaimsResponse\Data\Orders;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmount;

class Item extends Entity
{
    protected string $orderCode;
    protected int $statusId;
    protected string $productCode;
    protected TypeAmount $amount;
    protected TypePositiveAmount $amountCompleted;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
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

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getAmount(): TypeAmount
    {
        return $this->amount;
    }

    public function setAmount(TypeAmount $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmountCompleted(): TypePositiveAmount
    {
        return $this->amountCompleted;
    }

    public function setAmountCompleted(TypePositiveAmount $amountCompleted): static
    {
        $this->amountCompleted = $amountCompleted;
        return $this;
    }
}
