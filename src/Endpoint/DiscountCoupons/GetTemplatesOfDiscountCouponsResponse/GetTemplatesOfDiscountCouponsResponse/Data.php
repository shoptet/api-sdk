<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCouponsResponse\GetTemplatesOfDiscountCouponsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCouponsResponse\GetTemplatesOfDiscountCouponsResponse\Data\CouponTemplates;

class Data extends Entity
{
    protected CouponTemplates $couponTemplates;

    public function getCouponTemplates(): CouponTemplates
    {
        return $this->couponTemplates;
    }

    public function setCouponTemplates(CouponTemplates $couponTemplates): static
    {
        $this->couponTemplates = $couponTemplates;
        return $this;
    }
}
