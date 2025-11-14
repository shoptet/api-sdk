<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderClaimsResponse\GetOrderClaimsResponse\Data\Orders;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmountNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePositiveAmountNullable;

class Item extends Entity
{
    protected string $orderCode;
    protected float $statusId;
    protected string $productCode;
    protected TypeAmountNullable $amount;
    protected TypePositiveAmountNullable $amountCompleted;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
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

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getAmount(): TypeAmountNullable
    {
        return $this->amount;
    }

    public function setAmount(TypeAmountNullable $amount): static
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmountCompleted(): TypePositiveAmountNullable
    {
        return $this->amountCompleted;
    }

    public function setAmountCompleted(TypePositiveAmountNullable $amountCompleted): static
    {
        $this->amountCompleted = $amountCompleted;
        return $this;
    }
}
