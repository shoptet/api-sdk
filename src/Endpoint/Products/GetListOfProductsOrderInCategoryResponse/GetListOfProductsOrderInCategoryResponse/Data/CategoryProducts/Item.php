<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategoryResponse\GetListOfProductsOrderInCategoryResponse\Data\CategoryProducts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Item extends Entity
{
    protected TypeGuid $productGuid;
    protected ?float $priority;

    public function getProductGuid(): TypeGuid
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuid $productGuid): static
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
