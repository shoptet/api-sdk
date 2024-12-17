<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected ?float $priority;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): static
    {
        $this->priority = $priority;
        return $this;
    }
}
