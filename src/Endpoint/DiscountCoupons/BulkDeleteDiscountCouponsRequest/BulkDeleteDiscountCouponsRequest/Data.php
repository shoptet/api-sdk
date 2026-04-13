<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest\BulkDeleteDiscountCouponsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest\BulkDeleteDiscountCouponsRequest\Data\CouponCodes;

class Data extends Entity
{
    protected CouponCodes $couponCodes;

    public function getCouponCodes(): CouponCodes
    {
        return $this->couponCodes;
    }

    public function setCouponCodes(CouponCodes $couponCodes): static
    {
        $this->couponCodes = $couponCodes;
        return $this;
    }
}
