<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\CreateProductAvailabilityRequest\CreateProductAvailabilityRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeColor;

class Data extends Entity
{
    protected string $name;
    protected ?string $indexName;
    protected ?string $description;
    protected ?TypeColor $color;
    protected ?int $onStockInHours;
    protected ?int $deliveryInHours;
    protected ?int $googleAvailabilityId;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getIndexName(): ?string
    {
        return $this->indexName;
    }

    public function setIndexName(?string $indexName): static
    {
        $this->indexName = $indexName;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getColor(): ?TypeColor
    {
        return $this->color;
    }

    public function setColor(?TypeColor $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getOnStockInHours(): ?int
    {
        return $this->onStockInHours;
    }

    public function setOnStockInHours(?int $onStockInHours): static
    {
        $this->onStockInHours = $onStockInHours;
        return $this;
    }

    public function getDeliveryInHours(): ?int
    {
        return $this->deliveryInHours;
    }

    public function setDeliveryInHours(?int $deliveryInHours): static
    {
        $this->deliveryInHours = $deliveryInHours;
        return $this;
    }

    public function getGoogleAvailabilityId(): ?int
    {
        return $this->googleAvailabilityId;
    }

    public function setGoogleAvailabilityId(?int $googleAvailabilityId): static
    {
        $this->googleAvailabilityId = $googleAvailabilityId;
        return $this;
    }
}
