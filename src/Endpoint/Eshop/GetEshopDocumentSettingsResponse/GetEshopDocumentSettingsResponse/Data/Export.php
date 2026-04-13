<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Export extends Entity
{
    protected bool $useIsdocModule;
    protected ?string $erpMoneyS3PreAccounting;
    protected ?string $erpMoneyS3Account;

    public function isUseIsdocModule(): bool
    {
        return $this->useIsdocModule;
    }

    public function setUseIsdocModule(bool $useIsdocModule): static
    {
        $this->useIsdocModule = $useIsdocModule;
        return $this;
    }

    public function getErpMoneyS3PreAccounting(): ?string
    {
        return $this->erpMoneyS3PreAccounting;
    }

    public function setErpMoneyS3PreAccounting(?string $erpMoneyS3PreAccounting): static
    {
        $this->erpMoneyS3PreAccounting = $erpMoneyS3PreAccounting;
        return $this;
    }

    public function getErpMoneyS3Account(): ?string
    {
        return $this->erpMoneyS3Account;
    }

    public function setErpMoneyS3Account(?string $erpMoneyS3Account): static
    {
        $this->erpMoneyS3Account = $erpMoneyS3Account;
        return $this;
    }
}
