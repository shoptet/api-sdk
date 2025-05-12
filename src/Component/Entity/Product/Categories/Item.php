<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Categories;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class Item extends Entity
{
    protected TypeGuidNullable $guid;
    protected string $name;
    protected TypeGuidNullable $parentGuid;

    public function getGuid(): TypeGuidNullable
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidNullable $guid): static
    {
        $this->guid = $guid;
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

    public function getParentGuid(): TypeGuidNullable
    {
        return $this->parentGuid;
    }

    public function setParentGuid(TypeGuidNullable $parentGuid): static
    {
        $this->parentGuid = $parentGuid;
        return $this;
    }
}
