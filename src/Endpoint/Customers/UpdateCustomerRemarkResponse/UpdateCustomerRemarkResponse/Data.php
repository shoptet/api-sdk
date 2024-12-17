<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkResponse\UpdateCustomerRemarkResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkResponse\UpdateCustomerRemarkResponse\Data\Remark;

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
