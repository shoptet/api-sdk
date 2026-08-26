<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsResponse\UpdateDiscountCouponsTemplateProductsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsResponse\UpdateDiscountCouponsTemplateProductsResponse\Data\Products;

class Data extends Entity
{
    protected ?Products $products;

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): static
    {
        $this->products = $products;
        return $this;
    }
}
