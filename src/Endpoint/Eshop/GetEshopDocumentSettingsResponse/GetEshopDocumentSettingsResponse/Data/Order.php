<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data\Order\ItemRemarkParameters;

class Order extends Entity
{
    protected ?string $codePrefix;
    protected int $codeLength;
    protected bool $isCodeRandom;
    protected int $numberSeriesStartFrom;
    protected ?bool $syncDocuments;
    protected ?bool $printItemRemark;
    protected ?bool $displayProductStockLocation;
    protected ?ItemRemarkParameters $itemRemarkParameters;

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

    public function isIsCodeRandom(): bool
    {
        return $this->isCodeRandom;
    }

    public function setIsCodeRandom(bool $isCodeRandom): static
    {
        $this->isCodeRandom = $isCodeRandom;
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

    public function getSyncDocuments(): ?bool
    {
        return $this->syncDocuments;
    }

    public function setSyncDocuments(?bool $syncDocuments): static
    {
        $this->syncDocuments = $syncDocuments;
        return $this;
    }

    public function getPrintItemRemark(): ?bool
    {
        return $this->printItemRemark;
    }

    public function setPrintItemRemark(?bool $printItemRemark): static
    {
        $this->printItemRemark = $printItemRemark;
        return $this;
    }

    public function getDisplayProductStockLocation(): ?bool
    {
        return $this->displayProductStockLocation;
    }

    public function setDisplayProductStockLocation(?bool $displayProductStockLocation): static
    {
        $this->displayProductStockLocation = $displayProductStockLocation;
        return $this;
    }

    public function getItemRemarkParameters(): ?ItemRemarkParameters
    {
        return $this->itemRemarkParameters;
    }

    public function setItemRemarkParameters(?ItemRemarkParameters $itemRemarkParameters): static
    {
        $this->itemRemarkParameters = $itemRemarkParameters;
        return $this;
    }
}
