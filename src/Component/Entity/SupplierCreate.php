<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class SupplierCreate extends Entity
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
