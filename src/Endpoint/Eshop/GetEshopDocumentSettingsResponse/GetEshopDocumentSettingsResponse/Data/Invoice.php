<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Invoice extends Entity
{
    protected ?string $codePrefix;
    protected int $codeLength;
    protected int $numberSeriesStartFrom;
    protected ?bool $unifyCodeWithOrder;
    protected bool $useVariableSymbolFromOrder;
    protected bool $useSpecialNumberSerieForCashdesk;
    protected ?string $cashdeskCodePrefix;
    protected ?int $cashdeskCodeLength;
    protected ?int $cashdeskNumberSeriesStartFrom;
    protected bool $displayWarranty;
    protected bool $printItemRemark;
    protected bool $addEanToItemRemark;
    protected bool $addNotesFromOrder;
    protected ?bool $displayDoNotPay;
    protected ?bool $displayPriceWithoutDiscount;
    protected ?bool $displayTaxableSupplyDate;

    public function getCodePrefix(): ?string
    {
        return $this->codePrefix;
    }

    public function setCodePrefix(?string $codePrefix): static
    {
        $this->codePrefix = $codePrefix;
        return $this;
    }

    public function getCodeLength(): int
    {
        return $this->codeLength;
    }

    public function setCodeLength(int $codeLength): static
    {
        $this->codeLength = $codeLength;
        return $this;
    }

    public function getNumberSeriesStartFrom(): int
    {
        return $this->numberSeriesStartFrom;
    }

    public function setNumberSeriesStartFrom(int $numberSeriesStartFrom): static
    {
        $this->numberSeriesStartFrom = $numberSeriesStartFrom;
        return $this;
    }

    public function getUnifyCodeWithOrder(): ?bool
    {
        return $this->unifyCodeWithOrder;
    }

    public function setUnifyCodeWithOrder(?bool $unifyCodeWithOrder): static
    {
        $this->unifyCodeWithOrder = $unifyCodeWithOrder;
        return $this;
    }

    public function isUseVariableSymbolFromOrder(): bool
    {
        return $this->useVariableSymbolFromOrder;
    }

    public function setUseVariableSymbolFromOrder(bool $useVariableSymbolFromOrder): static
    {
        $this->useVariableSymbolFromOrder = $useVariableSymbolFromOrder;
        return $this;
    }

    public function isUseSpecialNumberSerieForCashdesk(): bool
    {
        return $this->useSpecialNumberSerieForCashdesk;
    }

    public function setUseSpecialNumberSerieForCashdesk(bool $useSpecialNumberSerieForCashdesk): static
    {
        $this->useSpecialNumberSerieForCashdesk = $useSpecialNumberSerieForCashdesk;
        return $this;
    }

    public function getCashdeskCodePrefix(): ?string
    {
        return $this->cashdeskCodePrefix;
    }

    public function setCashdeskCodePrefix(?string $cashdeskCodePrefix): static
    {
        $this->cashdeskCodePrefix = $cashdeskCodePrefix;
        return $this;
    }

    public function getCashdeskCodeLength(): ?int
    {
        return $this->cashdeskCodeLength;
    }

    public function setCashdeskCodeLength(?int $cashdeskCodeLength): static
    {
        $this->cashdeskCodeLength = $cashdeskCodeLength;
        return $this;
    }

    public function getCashdeskNumberSeriesStartFrom(): ?int
    {
        return $this->cashdeskNumberSeriesStartFrom;
    }

    public function setCashdeskNumberSeriesStartFrom(?int $cashdeskNumberSeriesStartFrom): static
    {
        $this->cashdeskNumberSeriesStartFrom = $cashdeskNumberSeriesStartFrom;
        return $this;
    }

    public function isDisplayWarranty(): bool
    {
        return $this->displayWarranty;
    }

    public function setDisplayWarranty(bool $displayWarranty): static
    {
        $this->displayWarranty = $displayWarranty;
        return $this;
    }

    public function isPrintItemRemark(): bool
    {
        return $this->printItemRemark;
    }

    public function setPrintItemRemark(bool $printItemRemark): static
    {
        $this->printItemRemark = $printItemRemark;
        return $this;
    }

    public function isAddEanToItemRemark(): bool
    {
        return $this->addEanToItemRemark;
    }

    public function setAddEanToItemRemark(bool $addEanToItemRemark): static
    {
        $this->addEanToItemRemark = $addEanToItemRemark;
        return $this;
    }

    public function isAddNotesFromOrder(): bool
    {
        return $this->addNotesFromOrder;
    }

    public function setAddNotesFromOrder(bool $addNotesFromOrder): static
    {
        $this->addNotesFromOrder = $addNotesFromOrder;
        return $this;
    }

    public function getDisplayDoNotPay(): ?bool
    {
        return $this->displayDoNotPay;
    }

    public function setDisplayDoNotPay(?bool $displayDoNotPay): static
    {
        $this->displayDoNotPay = $displayDoNotPay;
        return $this;
    }

    public function getDisplayPriceWithoutDiscount(): ?bool
    {
        return $this->displayPriceWithoutDiscount;
    }

    public function setDisplayPriceWithoutDiscount(?bool $displayPriceWithoutDiscount): static
    {
        $this->displayPriceWithoutDiscount = $displayPriceWithoutDiscount;
        return $this;
    }

    public function getDisplayTaxableSupplyDate(): ?bool
    {
        return $this->displayTaxableSupplyDate;
    }

    public function setDisplayTaxableSupplyDate(?bool $displayTaxableSupplyDate): static
    {
        $this->displayTaxableSupplyDate = $displayTaxableSupplyDate;
        return $this;
    }
}
