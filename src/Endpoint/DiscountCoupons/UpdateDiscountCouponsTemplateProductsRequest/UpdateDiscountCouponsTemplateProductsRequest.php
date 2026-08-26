<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsTemplateProductsRequest\UpdateDiscountCouponsTemplateProductsRequest\Data;

class UpdateDiscountCouponsTemplateProductsRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}
