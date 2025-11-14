<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsRequest\CreateDiscountCouponsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsRequest\CreateDiscountCouponsRequest\Data\Coupons;

class Data extends Entity
{
    protected Coupons $coupons;

    public function getCoupons(): Coupons
    {
        return $this->coupons;
    }

    public function setCoupons(Coupons $coupons): static
    {
        $this->coupons = $coupons;
        return $this;
    }
}
