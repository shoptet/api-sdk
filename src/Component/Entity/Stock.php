<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class Stock extends Entity
{
    protected int $id;
    protected string $title;
    protected bool $isDeliveryPoint;
    protected ?string $deliveryPointTitle;
    protected ?string $deliveryPointAddress;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function isIsDeliveryPoint(): bool
    {
        return $this->isDeliveryPoint;
    }

    public function setIsDeliveryPoint(bool $isDeliveryPoint): static
    {
        $this->isDeliveryPoint = $isDeliveryPoint;
        return $this;
    }

    public function getDeliveryPointTitle(): ?string
    {
        return $this->deliveryPointTitle;
    }

    public function setDeliveryPointTitle(?string $deliveryPointTitle): static
    {
        $this->deliveryPointTitle = $deliveryPointTitle;
        return $this;
    }

    public function getDeliveryPointAddress(): ?string
    {
        return $this->deliveryPointAddress;
    }

    public function setDeliveryPointAddress(?string $deliveryPointAddress): static
    {
        $this->deliveryPointAddress = $deliveryPointAddress;
        return $this;
    }
}
