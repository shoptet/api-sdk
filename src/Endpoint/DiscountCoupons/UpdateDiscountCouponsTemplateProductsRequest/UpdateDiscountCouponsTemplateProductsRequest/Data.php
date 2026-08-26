<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsRequest\UpdateDiscountCouponsTemplateProductsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsRequest\UpdateDiscountCouponsTemplateProductsRequest\Data\ProductGuids;

class Data extends Entity
{
    protected ProductGuids $productGuids;

    public function getProductGuids(): ProductGuids
    {
        return $this->productGuids;
    }

    public function setProductGuids(ProductGuids $productGuids): static
    {
        $this->productGuids = $productGuids;
        return $this;
    }
}
