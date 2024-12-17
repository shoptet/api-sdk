<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDetailOfDiscountCouponResponse\GetDetailOfDiscountCouponResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\DiscountCoupon;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected DiscountCoupon $coupon;

    public function getCoupon(): DiscountCoupon
    {
        return $this->coupon;
    }

    public function setCoupon(DiscountCoupon $coupon): static
    {
        $this->coupon = $coupon;
        return $this;
    }
}
