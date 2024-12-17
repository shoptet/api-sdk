<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse\Data\Statuses;

class Data extends Entity
{
    protected float $defaultStatus;
    protected Statuses $statuses;

    public function getDefaultStatus(): float
    {
        return $this->defaultStatus;
    }

    public function setDefaultStatus(float $defaultStatus): static
    {
        $this->defaultStatus = $defaultStatus;
        return $this;
    }

    public function getStatuses(): Statuses
    {
        return $this->statuses;
    }

    public function setStatuses(Statuses $statuses): static
    {
        $this->statuses = $statuses;
        return $this;
    }
}
