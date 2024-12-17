<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class RelatedProduct extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected int $priority;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }
}
