<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ShipmentPackageWithHistory\History;

class ShipmentPackageWithHistory extends Entity
{
    protected ?float $width;
    protected ?float $height;
    protected ?float $depth;
    protected ?float $weight;
    protected ?string $name;
    protected ?int $packagingId;
    protected ?string $labelUrl;
    protected ?string $labelZpl;
    protected ?string $trackingNumber;
    protected ?string $trackingUrl;
    protected History $history;

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth(): ?float
    {
        return $this->depth;
    }

    public function setDepth(?float $depth): static
    {
        $this->depth = $depth;
        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): static
    {
        $this->weight = $weight;
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

    public function getPackagingId(): ?int
    {
        return $this->packagingId;
    }

    public function setPackagingId(?int $packagingId): static
    {
        $this->packagingId = $packagingId;
        return $this;
    }

    public function getLabelUrl(): ?string
    {
        return $this->labelUrl;
    }

    public function setLabelUrl(?string $labelUrl): static
    {
        $this->labelUrl = $labelUrl;
        return $this;
    }

    public function getLabelZpl(): ?string
    {
        return $this->labelZpl;
    }

    public function setLabelZpl(?string $labelZpl): static
    {
        $this->labelZpl = $labelZpl;
        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): static
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(?string $trackingUrl): static
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    public function getHistory(): History
    {
        return $this->history;
    }

    public function setHistory(History $history): static
    {
        $this->history = $history;
        return $this;
    }
}
