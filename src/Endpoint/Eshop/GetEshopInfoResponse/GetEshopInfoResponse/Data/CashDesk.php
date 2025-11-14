<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CashDesk extends Entity
{
    protected ?int $defaultOrderStatusId;

    public function getDefaultOrderStatusId(): ?int
    {
        return $this->defaultOrderStatusId;
    }

    public function setDefaultOrderStatusId(?int $defaultOrderStatusId): static
    {
        $this->defaultOrderStatusId = $defaultOrderStatusId;
        return $this;
    }
}
