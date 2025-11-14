<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class ProductPricelistSnapshot extends PricelistDetail
{
    protected TypeGuidUnlimited $productGuid;
    protected int $productId;

    public function getProductGuid(): TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): static
    {
        $this->productId = $productId;
        return $this;
    }
}
