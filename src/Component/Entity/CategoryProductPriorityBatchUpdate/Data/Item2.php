<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\CategoryProductPriorityBatchUpdate\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item2 extends Entity
{
    protected string $productCode;
    protected ?int $priority;

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): static
    {
        $this->productCode = $productCode;
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
