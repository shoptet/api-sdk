<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse\Data\Endpoints\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Group extends Entity
{
    protected float $id;
    protected string $description;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
