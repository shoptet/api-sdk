<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class PaymentMethod extends Entity
{
    protected TypeGuidNullable $guid;
    protected string $name;

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
}
