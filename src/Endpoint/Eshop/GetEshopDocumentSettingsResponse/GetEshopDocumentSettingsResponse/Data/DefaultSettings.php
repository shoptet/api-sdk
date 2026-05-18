<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeConstSymbolNullable;

class DefaultSettings extends Entity
{
    protected ?int $billingMethodId;
    protected ?TypeConstSymbolNullable $constSymbol;
    protected ?string $specSymbol;
    protected ?int $maturity;
    protected ?string $invoiceRemark;
    protected ?string $proformaInvoiceRemark;
    protected ?bool $showQrCode;
    protected ?string $sortItems;
    protected ?bool $showBarcode;
    protected ?bool $showBillFullName;
    protected ?bool $showBillFullNameOfRecipient;
    protected ?bool $showRecipientEmail;
    protected ?bool $showRecipientPhone;
    protected ?bool $showRecipientDeliveryAddress;

    public function getBillingMethodId(): ?int
    {
        return $this->billingMethodId;
    }

    public function setBillingMethodId(?int $billingMethodId): static
    {
        $this->billingMethodId = $billingMethodId;
        return $this;
    }

    public function getConstSymbol(): ?TypeConstSymbolNullable
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?TypeConstSymbolNullable $constSymbol): static
    {
        $this->constSymbol = $constSymbol;
        return $this;
    }

    public function getSpecSymbol(): ?string
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?string $specSymbol): static
    {
        $this->specSymbol = $specSymbol;
        return $this;
    }

    public function getMaturity(): ?int
    {
        return $this->maturity;
    }

    public function setMaturity(?int $maturity): static
    {
        $this->maturity = $maturity;
        return $this;
    }

    public function getInvoiceRemark(): ?string
    {
        return $this->invoiceRemark;
    }

    public function setInvoiceRemark(?string $invoiceRemark): static
    {
        $this->invoiceRemark = $invoiceRemark;
        return $this;
    }

    public function getProformaInvoiceRemark(): ?string
    {
        return $this->proformaInvoiceRemark;
    }

    public function setProformaInvoiceRemark(?string $proformaInvoiceRemark): static
    {
        $this->proformaInvoiceRemark = $proformaInvoiceRemark;
        return $this;
    }

    public function getShowQrCode(): ?bool
    {
        return $this->showQrCode;
    }

    public function setShowQrCode(?bool $showQrCode): static
    {
        $this->showQrCode = $showQrCode;
        return $this;
    }

    public function getSortItems(): ?string
    {
        return $this->sortItems;
    }

    public function setSortItems(?string $sortItems): static
    {
        $this->sortItems = $sortItems;
        return $this;
    }

    public function getShowBarcode(): ?bool
    {
        return $this->showBarcode;
    }

    public function setShowBarcode(?bool $showBarcode): static
    {
        $this->showBarcode = $showBarcode;
        return $this;
    }

    public function getShowBillFullName(): ?bool
    {
        return $this->showBillFullName;
    }

    public function setShowBillFullName(?bool $showBillFullName): static
    {
        $this->showBillFullName = $showBillFullName;
        return $this;
    }

    public function getShowBillFullNameOfRecipient(): ?bool
    {
        return $this->showBillFullNameOfRecipient;
    }

    public function setShowBillFullNameOfRecipient(?bool $showBillFullNameOfRecipient): static
    {
        $this->showBillFullNameOfRecipient = $showBillFullNameOfRecipient;
        return $this;
    }

    public function getShowRecipientEmail(): ?bool
    {
        return $this->showRecipientEmail;
    }

    public function setShowRecipientEmail(?bool $showRecipientEmail): static
    {
        $this->showRecipientEmail = $showRecipientEmail;
        return $this;
    }

    public function getShowRecipientPhone(): ?bool
    {
        return $this->showRecipientPhone;
    }

    public function setShowRecipientPhone(?bool $showRecipientPhone): static
    {
        $this->showRecipientPhone = $showRecipientPhone;
        return $this;
    }

    public function getShowRecipientDeliveryAddress(): ?bool
    {
        return $this->showRecipientDeliveryAddress;
    }

    public function setShowRecipientDeliveryAddress(?bool $showRecipientDeliveryAddress): static
    {
        $this->showRecipientDeliveryAddress = $showRecipientDeliveryAddress;
        return $this;
    }
}
