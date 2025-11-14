<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSurchargeParametersWithoutPrice\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ParameterValue extends Entity
{
    protected ?string $valueIndex;
    protected ?string $description;

    public function getValueIndex(): ?string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(?string $valueIndex): static
    {
        $this->valueIndex = $valueIndex;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
