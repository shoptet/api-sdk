<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\Variants\Item\Parameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $nameIndex;
    protected string $valueIndex;

    public function getNameIndex(): string
    {
        return $this->nameIndex;
    }

    public function setNameIndex(string $nameIndex): static
    {
        $this->nameIndex = $nameIndex;
        return $this;
    }

    public function getValueIndex(): string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }
}
