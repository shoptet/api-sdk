<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Order\PaymentTransactions;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Item extends Entity
{
    protected string $transactionId;
    protected TypePrice $price;
    protected string $status;
    protected TypeDateTimeNullable $creationTime;
    protected TypeDateTimeNullable $changeTime;

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): static
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getPrice(): TypePrice
    {
        return $this->price;
    }

    public function setPrice(TypePrice $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getCreationTime(): TypeDateTimeNullable
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTimeNullable $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getChangeTime(): TypeDateTimeNullable
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTimeNullable $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }
}
