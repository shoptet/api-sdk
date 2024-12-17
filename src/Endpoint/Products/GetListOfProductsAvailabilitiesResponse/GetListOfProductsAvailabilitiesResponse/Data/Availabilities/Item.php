<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data\Availabilities;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data\Availabilities\Item\GoogleAvailability;

class Item extends Entity
{
    protected int $id;
    protected string $name;
    protected ?string $description;
    protected ?string $color;
    protected bool $system;
    protected ?int $onStockInHours;
    protected ?int $deliveryInHours;
    protected ?GoogleAvailability $googleAvailability;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): static
    {
        $this->system = $system;
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

    public function getGoogleAvailability(): ?GoogleAvailability
    {
        return $this->googleAvailability;
    }

    public function setGoogleAvailability(?GoogleAvailability $googleAvailability): static
    {
        $this->googleAvailability = $googleAvailability;
        return $this;
    }
}
