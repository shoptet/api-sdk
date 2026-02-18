<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Source extends Entity
{
    protected ?string $name;
    protected int $id;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }
}
