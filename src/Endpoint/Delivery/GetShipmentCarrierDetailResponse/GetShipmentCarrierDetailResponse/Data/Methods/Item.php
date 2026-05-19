<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\Methods;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $methodId;
    protected string $serviceName;
    protected string $methodName;
    protected string $groupName;
    protected string $state;

    public function getMethodId(): int
    {
        return $this->methodId;
    }

    public function setMethodId(int $methodId): static
    {
        $this->methodId = $methodId;
        return $this;
    }

    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): static
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }

    public function setMethodName(string $methodName): static
    {
        $this->methodName = $methodName;
        return $this;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): static
    {
        $this->groupName = $groupName;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;
        return $this;
    }
}
