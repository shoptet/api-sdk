<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsageRequest\UpdateDiscountCouponsUsageRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $orderCode;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }
}
