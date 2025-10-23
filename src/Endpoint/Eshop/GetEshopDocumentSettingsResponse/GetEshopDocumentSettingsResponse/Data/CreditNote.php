<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\CreditNote\ForbiddenItemTypes;

class CreditNote extends Entity
{
    protected ?string $codePrefix;
    protected int $codeLength;
    protected int $numberSeriesStartFrom;
    protected ?bool $unifyCodeWithOrder;
    protected bool $displayCorrectedAndOriginalDocumentDiff;
    protected bool $printItemRemark;
    protected ?string $defaultReasonRemark;
    protected bool $restock;
    protected ?bool $addNotesFromOrder;
    protected ForbiddenItemTypes $forbiddenItemTypes;

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

    public function isDisplayCorrectedAndOriginalDocumentDiff(): bool
    {
        return $this->displayCorrectedAndOriginalDocumentDiff;
    }

    public function setDisplayCorrectedAndOriginalDocumentDiff(bool $displayCorrectedAndOriginalDocumentDiff): static
    {
        $this->displayCorrectedAndOriginalDocumentDiff = $displayCorrectedAndOriginalDocumentDiff;
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

    public function getDefaultReasonRemark(): ?string
    {
        return $this->defaultReasonRemark;
    }

    public function setDefaultReasonRemark(?string $defaultReasonRemark): static
    {
        $this->defaultReasonRemark = $defaultReasonRemark;
        return $this;
    }

    public function isRestock(): bool
    {
        return $this->restock;
    }

    public function setRestock(bool $restock): static
    {
        $this->restock = $restock;
        return $this;
    }

    public function getAddNotesFromOrder(): ?bool
    {
        return $this->addNotesFromOrder;
    }

    public function setAddNotesFromOrder(?bool $addNotesFromOrder): static
    {
        $this->addNotesFromOrder = $addNotesFromOrder;
        return $this;
    }

    public function getForbiddenItemTypes(): ForbiddenItemTypes
    {
        return $this->forbiddenItemTypes;
    }

    public function setForbiddenItemTypes(ForbiddenItemTypes $forbiddenItemTypes): static
    {
        $this->forbiddenItemTypes = $forbiddenItemTypes;
        return $this;
    }
}
