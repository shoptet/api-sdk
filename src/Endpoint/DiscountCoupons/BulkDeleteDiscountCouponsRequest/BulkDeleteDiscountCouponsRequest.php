<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest\BulkDeleteDiscountCouponsRequest\Data;

class BulkDeleteDiscountCouponsRequest extends Entity
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
