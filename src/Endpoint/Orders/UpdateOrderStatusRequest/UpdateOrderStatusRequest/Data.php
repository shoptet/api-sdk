<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusRequest\UpdateOrderStatusRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?float $statusId;
    protected ?bool $paid;
    protected ?float $billingMethodId;

    public function getStatusId(): ?float
    {
        return $this->statusId;
    }

    public function setStatusId(?float $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(?bool $paid): static
    {
        $this->paid = $paid;
        return $this;
    }

    public function getBillingMethodId(): ?float
    {
        return $this->billingMethodId;
    }

    public function setBillingMethodId(?float $billingMethodId): static
    {
        $this->billingMethodId = $billingMethodId;
        return $this;
    }
}
