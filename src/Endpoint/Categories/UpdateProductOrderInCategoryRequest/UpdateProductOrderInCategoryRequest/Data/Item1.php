<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item1 extends Entity
{
    protected TypeGuidUnlimited $productGuid;
    protected ?string $productCode;
    protected ?int $priority;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): static
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
