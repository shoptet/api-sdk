<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentDetail\Source;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ProofPaymentDetail extends Entity
{
    protected string $code;
    protected ?string $orderCode;
    protected ?string $proformaInvoiceCode;
    protected TypeDateTime $createdAt;
    protected TypeDateTime $updatedAt;
    protected TypeDateTime $issueDate;
    protected TypeDate $taxDate;
    protected bool $isValid;
    protected string $currencyCode;
    protected TypePrice $payment;
    protected bool $closed;
    protected ?string $billFullName;
    protected ?string $billCompany;
    protected ?string $billStreet;
    protected ?string $billHouseNumber;
    protected ?string $billCity;
    protected ?string $billDistrict;
    protected ?string $billAdditional;
    protected ?string $billZip;
    protected ?string $billCountryCode;
    protected ?string $billRegionName;
    protected ?string $billRegionShortcut;
    protected ?string $vatId;
    protected ?string $taxId;
    protected ?string $companyId;
    protected string $language;
    protected ?string $email;
    protected ?string $phone;
    protected Source $source;
    protected ?float $cashdeskId;
    protected ?TypeGuidUnlimited $customerGuid;
    protected ?float $customerProfileId;

    /** @deprecated */
    protected ?string $identificationNumber;
    protected ?string $remark;
    protected float $varSymbol;
    protected ?string $constSymbol;
    protected ?float $specSymbol;
    protected BillingMethod $billingMethod;
    protected ?string $billBankAccount;
    protected ?string $billIban;
    protected ?string $billBic;
    protected ?string $bankAccount;
    protected ?string $iban;
    protected ?string $bic;
    protected ?string $documentRemark;
    protected ?string $invoiceCode;
    protected ProofPaymentVatBreakdown $vatBreakdown;
    protected ?string $vatMode;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getProformaInvoiceCode(): ?string
    {
        return $this->proformaInvoiceCode;
    }

    public function setProformaInvoiceCode(?string $proformaInvoiceCode): static
    {
        $this->proformaInvoiceCode = $proformaInvoiceCode;
        return $this;
    }

    public function getCreatedAt(): TypeDateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(TypeDateTime $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): TypeDateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(TypeDateTime $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getIssueDate(): TypeDateTime
    {
        return $this->issueDate;
    }

    public function setIssueDate(TypeDateTime $issueDate): static
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    public function getTaxDate(): TypeDate
    {
        return $this->taxDate;
    }

    public function setTaxDate(TypeDate $taxDate): static
    {
        $this->taxDate = $taxDate;
        return $this;
    }

    public function isIsValid(): bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): static
    {
        $this->isValid = $isValid;
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

    public function getPayment(): TypePrice
    {
        return $this->payment;
    }

    public function setPayment(TypePrice $payment): static
    {
        $this->payment = $payment;
        return $this;
    }

    public function isClosed(): bool
    {
        return $this->closed;
    }

    public function setClosed(bool $closed): static
    {
        $this->closed = $closed;
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

    public function getBillCompany(): ?string
    {
        return $this->billCompany;
    }

    public function setBillCompany(?string $billCompany): static
    {
        $this->billCompany = $billCompany;
        return $this;
    }

    public function getBillStreet(): ?string
    {
        return $this->billStreet;
    }

    public function setBillStreet(?string $billStreet): static
    {
        $this->billStreet = $billStreet;
        return $this;
    }

    public function getBillHouseNumber(): ?string
    {
        return $this->billHouseNumber;
    }

    public function setBillHouseNumber(?string $billHouseNumber): static
    {
        $this->billHouseNumber = $billHouseNumber;
        return $this;
    }

    public function getBillCity(): ?string
    {
        return $this->billCity;
    }

    public function setBillCity(?string $billCity): static
    {
        $this->billCity = $billCity;
        return $this;
    }

    public function getBillDistrict(): ?string
    {
        return $this->billDistrict;
    }

    public function setBillDistrict(?string $billDistrict): static
    {
        $this->billDistrict = $billDistrict;
        return $this;
    }

    public function getBillAdditional(): ?string
    {
        return $this->billAdditional;
    }

    public function setBillAdditional(?string $billAdditional): static
    {
        $this->billAdditional = $billAdditional;
        return $this;
    }

    public function getBillZip(): ?string
    {
        return $this->billZip;
    }

    public function setBillZip(?string $billZip): static
    {
        $this->billZip = $billZip;
        return $this;
    }

    public function getBillCountryCode(): ?string
    {
        return $this->billCountryCode;
    }

    public function setBillCountryCode(?string $billCountryCode): static
    {
        $this->billCountryCode = $billCountryCode;
        return $this;
    }

    public function getBillRegionName(): ?string
    {
        return $this->billRegionName;
    }

    public function setBillRegionName(?string $billRegionName): static
    {
        $this->billRegionName = $billRegionName;
        return $this;
    }

    public function getBillRegionShortcut(): ?string
    {
        return $this->billRegionShortcut;
    }

    public function setBillRegionShortcut(?string $billRegionShortcut): static
    {
        $this->billRegionShortcut = $billRegionShortcut;
        return $this;
    }

    public function getVatId(): ?string
    {
        return $this->vatId;
    }

    public function setVatId(?string $vatId): static
    {
        $this->vatId = $vatId;
        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): static
    {
        $this->taxId = $taxId;
        return $this;
    }

    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    public function setCompanyId(?string $companyId): static
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getSource(): Source
    {
        return $this->source;
    }

    public function setSource(Source $source): static
    {
        $this->source = $source;
        return $this;
    }

    public function getCashdeskId(): ?float
    {
        return $this->cashdeskId;
    }

    public function setCashdeskId(?float $cashdeskId): static
    {
        $this->cashdeskId = $cashdeskId;
        return $this;
    }

    public function getCustomerGuid(): ?TypeGuidUnlimited
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuidUnlimited $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function getCustomerProfileId(): ?float
    {
        return $this->customerProfileId;
    }

    public function setCustomerProfileId(?float $customerProfileId): static
    {
        $this->customerProfileId = $customerProfileId;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getIdentificationNumber(): ?string
    {
        return $this->identificationNumber;
    }

    /**
     * @deprecated
     */
    public function setIdentificationNumber(?string $identificationNumber): static
    {
        $this->identificationNumber = $identificationNumber;
        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getVarSymbol(): float
    {
        return $this->varSymbol;
    }

    public function setVarSymbol(float $varSymbol): static
    {
        $this->varSymbol = $varSymbol;
        return $this;
    }

    public function getConstSymbol(): ?string
    {
        return $this->constSymbol;
    }

    public function setConstSymbol(?string $constSymbol): static
    {
        $this->constSymbol = $constSymbol;
        return $this;
    }

    public function getSpecSymbol(): ?float
    {
        return $this->specSymbol;
    }

    public function setSpecSymbol(?float $specSymbol): static
    {
        $this->specSymbol = $specSymbol;
        return $this;
    }

    public function getBillingMethod(): BillingMethod
    {
        return $this->billingMethod;
    }

    public function setBillingMethod(BillingMethod $billingMethod): static
    {
        $this->billingMethod = $billingMethod;
        return $this;
    }

    public function getBillBankAccount(): ?string
    {
        return $this->billBankAccount;
    }

    public function setBillBankAccount(?string $billBankAccount): static
    {
        $this->billBankAccount = $billBankAccount;
        return $this;
    }

    public function getBillIban(): ?string
    {
        return $this->billIban;
    }

    public function setBillIban(?string $billIban): static
    {
        $this->billIban = $billIban;
        return $this;
    }

    public function getBillBic(): ?string
    {
        return $this->billBic;
    }

    public function setBillBic(?string $billBic): static
    {
        $this->billBic = $billBic;
        return $this;
    }

    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?string $bankAccount): static
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): static
    {
        $this->iban = $iban;
        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): static
    {
        $this->bic = $bic;
        return $this;
    }

    public function getDocumentRemark(): ?string
    {
        return $this->documentRemark;
    }

    public function setDocumentRemark(?string $documentRemark): static
    {
        $this->documentRemark = $documentRemark;
        return $this;
    }

    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    public function setInvoiceCode(?string $invoiceCode): static
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    public function getVatBreakdown(): ProofPaymentVatBreakdown
    {
        return $this->vatBreakdown;
    }

    public function setVatBreakdown(ProofPaymentVatBreakdown $vatBreakdown): static
    {
        $this->vatBreakdown = $vatBreakdown;
        return $this;
    }

    public function getVatMode(): ?string
    {
        return $this->vatMode;
    }

    public function setVatMode(?string $vatMode): static
    {
        $this->vatMode = $vatMode;
        return $this;
    }
}
