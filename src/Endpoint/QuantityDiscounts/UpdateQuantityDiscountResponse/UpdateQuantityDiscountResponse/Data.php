<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountResponse\UpdateQuantityDiscountResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\QuantityDiscount;

class Data extends Entity
{
    protected QuantityDiscount $discount;

    public function getDiscount(): QuantityDiscount
    {
        return $this->discount;
    }

    public function setDiscount(QuantityDiscount $discount): static
    {
        $this->discount = $discount;
        return $this;
    }
}
