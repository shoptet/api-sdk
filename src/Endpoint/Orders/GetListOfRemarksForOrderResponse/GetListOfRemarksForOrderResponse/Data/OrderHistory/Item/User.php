<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse\Data\OrderHistory\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class User extends Entity
{
    protected string $id;
    protected string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): static
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
