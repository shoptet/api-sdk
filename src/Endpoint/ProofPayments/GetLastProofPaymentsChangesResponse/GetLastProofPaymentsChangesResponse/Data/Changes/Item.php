<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse\Data\Changes;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $changeType;
    protected string $changeTime;
    protected string $code;

    public function getChangeType(): string
    {
        return $this->changeType;
    }

    public function setChangeType(string $changeType): static
    {
        $this->changeType = $changeType;
        return $this;
    }

    public function getChangeTime(): string
    {
        return $this->changeTime;
    }

    public function setChangeTime(string $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }
}
