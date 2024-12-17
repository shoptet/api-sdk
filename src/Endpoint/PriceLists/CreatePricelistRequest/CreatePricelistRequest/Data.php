<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistRequest\CreatePricelistRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $name;

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
