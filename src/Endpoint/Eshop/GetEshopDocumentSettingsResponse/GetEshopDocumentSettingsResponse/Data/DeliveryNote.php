<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class DeliveryNote extends Entity
{
    protected ?string $codePrefix;
    protected int $codeLength;
    protected int $numberSeriesStartFrom;
    protected ?bool $unifyCodeWithOrder;
    protected bool $printItemRemark;

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

    public function isPrintItemRemark(): bool
    {
        return $this->printItemRemark;
    }

    public function setPrintItemRemark(bool $printItemRemark): static
    {
        $this->printItemRemark = $printItemRemark;
        return $this;
    }
}
