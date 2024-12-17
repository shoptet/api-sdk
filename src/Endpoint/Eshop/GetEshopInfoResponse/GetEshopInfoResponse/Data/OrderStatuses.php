<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\OrderStatuses\Statuses;

class OrderStatuses extends Entity
{
    protected Statuses $statuses;
    protected int $defaultStatus;

    public function getStatuses(): Statuses
    {
        return $this->statuses;
    }

    public function setStatuses(Statuses $statuses): static
    {
        $this->statuses = $statuses;
        return $this;
    }

    public function getDefaultStatus(): int
    {
        return $this->defaultStatus;
    }

    public function setDefaultStatus(int $defaultStatus): static
    {
        $this->defaultStatus = $defaultStatus;
        return $this;
    }
}
