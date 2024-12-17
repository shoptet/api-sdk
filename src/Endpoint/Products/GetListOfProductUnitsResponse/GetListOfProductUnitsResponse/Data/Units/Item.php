<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnitsResponse\GetListOfProductUnitsResponse\Data\Units;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected string $name;
    protected bool $system;

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

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): static
    {
        $this->system = $system;
        return $this;
    }
}
