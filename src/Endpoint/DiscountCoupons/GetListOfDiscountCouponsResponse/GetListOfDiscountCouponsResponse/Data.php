<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCouponsResponse\GetListOfDiscountCouponsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCouponsResponse\GetListOfDiscountCouponsResponse\Data\Coupons;

class Data extends Entity
{
    protected Coupons $coupons;
    protected Paginator $paginator;

    public function getCoupons(): Coupons
    {
        return $this->coupons;
    }

    public function setCoupons(Coupons $coupons): static
    {
        $this->coupons = $coupons;
        return $this;
    }

    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }
}
