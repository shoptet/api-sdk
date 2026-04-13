<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForGettingOrderStatusResponse\GetShippingRequestForGettingOrderStatusResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $status;
    protected ?string $orderCode;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }
}
