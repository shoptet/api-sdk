<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\CategoryProductPriorityBatchUpdate\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Item extends Entity
{
    protected TypeGuid $productGuid;
    protected ?int $priority;

    public function getProductGuid(): TypeGuid
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuid $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }
}
