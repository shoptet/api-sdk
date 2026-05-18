<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item2 extends Entity
{
    protected int $packaging;
    protected null|string|int $weight;

    public function getPackaging(): int
    {
        return $this->packaging;
    }

    public function setPackaging(int $packaging): static
    {
        $this->packaging = $packaging;
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
