<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ProofPayment extends Entity
{
    protected bool $useSequentionalNumberSerie;
    protected ?string $codePrefix;
    protected ?int $codeLength;
    protected ?int $numberSeriesStartFrom;
    protected ?string $codePrefixOrder;
    protected ?string $codePrefixProformaInvoice;
    protected bool $createByIncomingPayment;

    public function isUseSequentionalNumberSerie(): bool
    {
        return $this->useSequentionalNumberSerie;
    }

    public function setUseSequentionalNumberSerie(bool $useSequentionalNumberSerie): static
    {
        $this->useSequentionalNumberSerie = $useSequentionalNumberSerie;
        return $this;
    }

    public function getCodePrefix(): ?string
    {
        return $this->codePrefix;
    }

    public function setCodePrefix(?string $codePrefix): static
    {
        $this->codePrefix = $codePrefix;
        return $this;
    }

    public function getCodeLength(): ?int
    {
        return $this->codeLength;
    }

    public function setCodeLength(?int $codeLength): static
    {
        $this->codeLength = $codeLength;
        return $this;
    }

    public function getNumberSeriesStartFrom(): ?int
    {
        return $this->numberSeriesStartFrom;
    }

    public function setNumberSeriesStartFrom(?int $numberSeriesStartFrom): static
    {
        $this->numberSeriesStartFrom = $numberSeriesStartFrom;
        return $this;
    }

    public function getCodePrefixOrder(): ?string
    {
        return $this->codePrefixOrder;
    }

    public function setCodePrefixOrder(?string $codePrefixOrder): static
    {
        $this->codePrefixOrder = $codePrefixOrder;
        return $this;
    }

    public function getCodePrefixProformaInvoice(): ?string
    {
        return $this->codePrefixProformaInvoice;
    }

    public function setCodePrefixProformaInvoice(?string $codePrefixProformaInvoice): static
    {
        $this->codePrefixProformaInvoice = $codePrefixProformaInvoice;
        return $this;
    }

    public function isCreateByIncomingPayment(): bool
    {
        return $this->createByIncomingPayment;
    }

    public function setCreateByIncomingPayment(bool $createByIncomingPayment): static
    {
        $this->createByIncomingPayment = $createByIncomingPayment;
        return $this;
    }
}
