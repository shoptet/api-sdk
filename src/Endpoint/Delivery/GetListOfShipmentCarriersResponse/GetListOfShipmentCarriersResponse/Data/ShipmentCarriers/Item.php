<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse\Data\ShipmentCarriers;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetListOfShipmentCarriersResponse\GetListOfShipmentCarriersResponse\Data\ShipmentCarriers\Item\Countries;

class Item extends Entity
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $code;
    protected ?string $type;
    protected ?bool $hasHomeDelivery;
    protected ?bool $hasPickupPoints;
    protected ?bool $hasCollection;
    protected ?int $maxWeight;
    protected ?string $activationStatus;
    protected ?Countries $countries;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getHasHomeDelivery(): ?bool
    {
        return $this->hasHomeDelivery;
    }

    public function setHasHomeDelivery(?bool $hasHomeDelivery): static
    {
        $this->hasHomeDelivery = $hasHomeDelivery;
        return $this;
    }

    public function getHasPickupPoints(): ?bool
    {
        return $this->hasPickupPoints;
    }

    public function setHasPickupPoints(?bool $hasPickupPoints): static
    {
        $this->hasPickupPoints = $hasPickupPoints;
        return $this;
    }

    public function getHasCollection(): ?bool
    {
        return $this->hasCollection;
    }

    public function setHasCollection(?bool $hasCollection): static
    {
        $this->hasCollection = $hasCollection;
        return $this;
    }

    public function getMaxWeight(): ?int
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?int $maxWeight): static
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    public function getActivationStatus(): ?string
    {
        return $this->activationStatus;
    }

    public function setActivationStatus(?string $activationStatus): static
    {
        $this->activationStatus = $activationStatus;
        return $this;
    }

    public function getCountries(): ?Countries
    {
        return $this->countries;
    }

    public function setCountries(?Countries $countries): static
    {
        $this->countries = $countries;
        return $this;
    }
}
