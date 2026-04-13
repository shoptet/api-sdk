<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsLastMoveResponse\GetStockMovementsLastMoveResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Data extends Entity
{
    protected int $lastId;
    protected TypeDateTime $lastChangeTime;

    public function getLastId(): int
    {
        return $this->lastId;
    }

    public function setLastId(int $lastId): static
    {
        $this->lastId = $lastId;
        return $this;
    }

    public function getLastChangeTime(): TypeDateTime
    {
        return $this->lastChangeTime;
    }

    public function setLastChangeTime(TypeDateTime $lastChangeTime): static
    {
        $this->lastChangeTime = $lastChangeTime;
        return $this;
    }
}
