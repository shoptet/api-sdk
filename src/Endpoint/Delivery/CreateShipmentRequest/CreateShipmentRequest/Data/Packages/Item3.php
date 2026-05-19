<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item3 extends Entity
{
    protected ?int $width;
    protected ?int $height;
    protected ?int $depth;
    protected null|string|int $weight;

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth(): ?int
    {
        return $this->depth;
    }

    public function setDepth(?int $depth): static
    {
        $this->depth = $depth;
        return $this;
    }

    public function getWeight(): null|string|int
    {
        return $this->weight;
    }

    public function setWeight(null|string|int $weight): static
    {
        $this->weight = $weight;
        return $this;
    }
}
