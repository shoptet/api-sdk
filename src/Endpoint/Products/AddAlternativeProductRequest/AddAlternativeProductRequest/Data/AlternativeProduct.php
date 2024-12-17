<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductRequest\AddAlternativeProductRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class AlternativeProduct extends Entity
{
    protected TypeGuidUnlimited $guid;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }
}
