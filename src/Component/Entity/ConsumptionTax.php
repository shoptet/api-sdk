<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ConsumptionTax extends Entity
{
    protected int $id;
    protected string $name;
    protected TypePrice $price;
    protected string $currency;
    protected bool $isVisible;
    protected TypeDateTimeNullable $created;
    protected TypeDateTimeNullable $updated;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function isIsVisible(): bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): static
    {
        $this->isVisible = $isVisible;
        return $this;
    }

    public function getCreated(): TypeDateTimeNullable
    {
        return $this->created;
    }

    public function setCreated(TypeDateTimeNullable $created): static
    {
        $this->created = $created;
        return $this;
    }

    public function getUpdated(): TypeDateTimeNullable
    {
        return $this->updated;
    }

    public function setUpdated(TypeDateTimeNullable $updated): static
    {
        $this->updated = $updated;
        return $this;
    }
}
