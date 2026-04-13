<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetDetailOfXYDiscountsResponse\GetDetailOfXYDiscountsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\XyDiscount;

class Data extends Entity
{
    protected XyDiscount $discount;

    public function getDiscount(): XyDiscount
    {
        return $this->discount;
    }

    public function setDiscount(XyDiscount $discount): static
    {
        $this->discount = $discount;
        return $this;
    }
}
