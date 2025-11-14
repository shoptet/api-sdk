<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettingsResponse\GetEshopDocumentSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CompanyStamp extends Entity
{
    protected int $xAxisCorrection;
    protected int $yAxisCorrection;
    protected ?string $stampUrl;

    public function getXAxisCorrection(): int
    {
        return $this->xAxisCorrection;
    }

    public function setXAxisCorrection(int $xAxisCorrection): static
    {
        $this->xAxisCorrection = $xAxisCorrection;
        return $this;
    }

    public function getYAxisCorrection(): int
    {
        return $this->yAxisCorrection;
    }

    public function setYAxisCorrection(int $yAxisCorrection): static
    {
        $this->yAxisCorrection = $yAxisCorrection;
        return $this;
    }

    public function getStampUrl(): ?string
    {
        return $this->stampUrl;
    }

    public function setStampUrl(?string $stampUrl): static
    {
        $this->stampUrl = $stampUrl;
        return $this;
    }
}
