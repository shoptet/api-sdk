<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemarkResponse\CreateCustomerRemarkResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemarkResponse\CreateCustomerRemarkResponse\Data\Remark;

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
