<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlagResponse\CreateProductFlagResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlagResponse\CreateProductFlagResponse\Data\Flags;

class Data extends Entity
{
    protected Flags $flags;

    public function getFlags(): Flags
    {
        return $this->flags;
    }

    public function setFlags(Flags $flags): static
    {
        $this->flags = $flags;
        return $this;
    }
}
