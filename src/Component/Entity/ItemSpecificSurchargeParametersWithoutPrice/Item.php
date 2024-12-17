<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ItemSpecificSurchargeParametersWithoutPrice;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $relationId;
    protected string $name;

    public function getRelationId(): string
    {
        return $this->relationId;
    }

    public function setRelationId(string $relationId): static
    {
        $this->relationId = $relationId;
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
