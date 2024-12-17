<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomersResponse\GetListOfCustomersResponse\Data\Customers;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class Item extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected TypeDateTime $creationTime;
    protected TypeDateTime $changeTime;
    protected ?string $billCompany;
    protected ?string $billFullName;
    protected string $adminUrl;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getChangeTime(): TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getBillCompany(): ?string
    {
        return $this->billCompany;
    }

    public function setBillCompany(?string $billCompany): static
    {
        $this->billCompany = $billCompany;
        return $this;
    }

    public function getBillFullName(): ?string
    {
        return $this->billFullName;
    }

    public function setBillFullName(?string $billFullName): static
    {
        $this->billFullName = $billFullName;
        return $this;
    }

    public function getAdminUrl(): string
    {
        return $this->adminUrl;
    }

    public function setAdminUrl(string $adminUrl): static
    {
        $this->adminUrl = $adminUrl;
        return $this;
    }
}
