<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerRemarkResponse\GetDetailOfCustomerRemarkResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerRemarkResponse\GetDetailOfCustomerRemarkResponse\Data\Remark;

class Data extends Entity
{
    protected Remark $remark;

    public function getRemark(): Remark
    {
        return $this->remark;
    }

    public function setRemark(Remark $remark): static
    {
        $this->remark = $remark;
        return $this;
    }
}
