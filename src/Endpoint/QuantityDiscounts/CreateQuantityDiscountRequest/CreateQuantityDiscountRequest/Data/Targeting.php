<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest\Data\Targeting\BrandCodes;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest\Data\Targeting\CategoryGuids;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest\Data\Targeting\ProductGuids;

class Targeting extends Entity
{
    protected ?ProductGuids $productGuids;
    protected ?CategoryGuids $categoryGuids;
    protected ?BrandCodes $brandCodes;

    public function getProductGuids(): ?ProductGuids
    {
        return $this->productGuids;
    }

    public function setProductGuids(?ProductGuids $productGuids): static
    {
        $this->productGuids = $productGuids;
        return $this;
    }

    public function getCategoryGuids(): ?CategoryGuids
    {
        return $this->categoryGuids;
    }

    public function setCategoryGuids(?CategoryGuids $categoryGuids): static
    {
        $this->categoryGuids = $categoryGuids;
        return $this;
    }

    public function getBrandCodes(): ?BrandCodes
    {
        return $this->brandCodes;
    }

    public function setBrandCodes(?BrandCodes $brandCodes): static
    {
        $this->brandCodes = $brandCodes;
        return $this;
    }
}
