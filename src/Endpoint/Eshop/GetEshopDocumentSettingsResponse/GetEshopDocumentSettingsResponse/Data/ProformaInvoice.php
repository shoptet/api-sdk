<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class ProformaInvoice extends Entity
{
    protected ?string $codePrefix;
    protected int $codeLength;
    protected int $numberSeriesStartFrom;
    protected ?bool $unifyCodeWithOrder;
    protected bool $useVariableSymbolFromOrder;
    protected bool $printItemRemark;
    protected bool $addNotesFromOrder;
    protected TypePrice $percentageValueForPartialPayment;

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

    public function isPrintItemRemark(): bool
    {
        return $this->printItemRemark;
    }

    public function setPrintItemRemark(bool $printItemRemark): static
    {
        $this->printItemRemark = $printItemRemark;
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

    public function getPercentageValueForPartialPayment(): TypePrice
    {
        return $this->percentageValueForPartialPayment;
    }

    public function setPercentageValueForPartialPayment(TypePrice $percentageValueForPartialPayment): static
    {
        $this->percentageValueForPartialPayment = $percentageValueForPartialPayment;
        return $this;
    }
}
