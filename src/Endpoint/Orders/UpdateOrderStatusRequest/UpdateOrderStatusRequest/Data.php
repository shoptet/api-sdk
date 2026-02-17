<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusRequest\UpdateOrderStatusRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected ?int $statusId;
    protected ?bool $paid;
    protected ?int $billingMethodId;

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): static
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

    public function getBillingMethodId(): ?int
    {
        return $this->billingMethodId;
    }

    public function setBillingMethodId(?int $billingMethodId): static
    {
        $this->billingMethodId = $billingMethodId;
        return $this;
    }
}
