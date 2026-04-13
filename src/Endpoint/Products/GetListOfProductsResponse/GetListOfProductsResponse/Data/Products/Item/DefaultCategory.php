<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class DefaultCategory extends Entity
{
    protected TypeGuidNullable $guid;
    protected ?string $name;
    protected ?bool $visible;

    public function getGuid(): TypeGuidNullable
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidNullable $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }
}
