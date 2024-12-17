<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilitiesResponse\GetListOfProductsAvailabilitiesResponse\Data\Availabilities\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class GoogleAvailability extends Entity
{
    protected int $id;
    protected string $name;

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
}
