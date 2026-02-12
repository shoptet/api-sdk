<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\OrderCreate;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ShippingDetails extends Entity
{
    protected string $branchId;
    protected ?string $branchName;
    protected ?int $carrierId;

    public function getBranchId(): string
    {
        return $this->branchId;
    }

    public function setBranchId(string $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function getBranchName(): ?string
    {
        return $this->branchName;
    }

    public function setBranchName(?string $branchName): static
    {
        $this->branchName = $branchName;
        return $this;
    }

    public function getCarrierId(): ?int
    {
        return $this->carrierId;
    }

    public function setCarrierId(?int $carrierId): static
    {
        $this->carrierId = $carrierId;
        return $this;
    }
}
