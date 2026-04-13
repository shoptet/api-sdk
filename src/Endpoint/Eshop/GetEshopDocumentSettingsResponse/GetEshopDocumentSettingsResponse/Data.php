<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\CompanyStamp;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\CreditNote;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\DefaultSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\DeliveryNote;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\Export;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\Invoice;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\Order;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\ProformaInvoice;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\ProofPayment;

class Data extends Entity
{
    protected Order $order;
    protected ?ProformaInvoice $proformaInvoice;
    protected ?Invoice $invoice;
    protected ?CreditNote $creditNote;
    protected ?DeliveryNote $deliveryNote;
    protected ?ProofPayment $proofPayment;
    protected ?Export $export;
    protected DefaultSettings $defaultSettings;
    protected ?string $logoUrl;
    protected CompanyStamp $companyStamp;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): static
    {
        $this->order = $order;
        return $this;
    }

    public function getProformaInvoice(): ?ProformaInvoice
    {
        return $this->proformaInvoice;
    }

    public function setProformaInvoice(?ProformaInvoice $proformaInvoice): static
    {
        $this->proformaInvoice = $proformaInvoice;
        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): static
    {
        $this->invoice = $invoice;
        return $this;
    }

    public function getCreditNote(): ?CreditNote
    {
        return $this->creditNote;
    }

    public function setCreditNote(?CreditNote $creditNote): static
    {
        $this->creditNote = $creditNote;
        return $this;
    }

    public function getDeliveryNote(): ?DeliveryNote
    {
        return $this->deliveryNote;
    }

    public function setDeliveryNote(?DeliveryNote $deliveryNote): static
    {
        $this->deliveryNote = $deliveryNote;
        return $this;
    }

    public function getProofPayment(): ?ProofPayment
    {
        return $this->proofPayment;
    }

    public function setProofPayment(?ProofPayment $proofPayment): static
    {
        $this->proofPayment = $proofPayment;
        return $this;
    }

    public function getExport(): ?Export
    {
        return $this->export;
    }

    public function setExport(?Export $export): static
    {
        $this->export = $export;
        return $this;
    }

    public function getDefaultSettings(): DefaultSettings
    {
        return $this->defaultSettings;
    }

    public function setDefaultSettings(DefaultSettings $defaultSettings): static
    {
        $this->defaultSettings = $defaultSettings;
        return $this;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): static
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    public function getCompanyStamp(): CompanyStamp
    {
        return $this->companyStamp;
    }

    public function setCompanyStamp(CompanyStamp $companyStamp): static
    {
        $this->companyStamp = $companyStamp;
        return $this;
    }
}
