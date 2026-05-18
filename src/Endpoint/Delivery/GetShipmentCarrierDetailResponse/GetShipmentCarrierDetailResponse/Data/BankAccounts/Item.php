<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\GetShipmentCarrierDetailResponse\GetShipmentCarrierDetailResponse\Data\BankAccounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected int $logisticsBankAccountId;
    protected int $carrierId;
    protected string $countryCode;
    protected string $currencyCode;
    protected bool $isDefault;
    protected string $iban;
    protected ?string $bban;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getLogisticsBankAccountId(): int
    {
        return $this->logisticsBankAccountId;
    }

    public function setLogisticsBankAccountId(int $logisticsBankAccountId): static
    {
        $this->logisticsBankAccountId = $logisticsBankAccountId;
        return $this;
    }

    public function getCarrierId(): int
    {
        return $this->carrierId;
    }

    public function setCarrierId(int $carrierId): static
    {
        $this->carrierId = $carrierId;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function isIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): static
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): static
    {
        $this->iban = $iban;
        return $this;
    }

    public function getBban(): ?string
    {
        return $this->bban;
    }

    public function setBban(?string $bban): static
    {
        $this->bban = $bban;
        return $this;
    }
}
