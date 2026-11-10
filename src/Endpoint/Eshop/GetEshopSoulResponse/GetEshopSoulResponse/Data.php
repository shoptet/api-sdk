<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopSoulResponse\GetEshopSoulResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected bool $enabled;
    protected ?string $shopSegment;
    protected ?string $targetAudience;
    protected ?string $toneOfVoice;
    protected ?string $differentiation;
    protected ?string $benefits;
    protected ?string $neverRules;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): static
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getShopSegment(): ?string
    {
        return $this->shopSegment;
    }

    public function setShopSegment(?string $shopSegment): static
    {
        $this->shopSegment = $shopSegment;
        return $this;
    }

    public function getTargetAudience(): ?string
    {
        return $this->targetAudience;
    }

    public function setTargetAudience(?string $targetAudience): static
    {
        $this->targetAudience = $targetAudience;
        return $this;
    }

    public function getToneOfVoice(): ?string
    {
        return $this->toneOfVoice;
    }

    public function setToneOfVoice(?string $toneOfVoice): static
    {
        $this->toneOfVoice = $toneOfVoice;
        return $this;
    }

    public function getDifferentiation(): ?string
    {
        return $this->differentiation;
    }

    public function setDifferentiation(?string $differentiation): static
    {
        $this->differentiation = $differentiation;
        return $this;
    }

    public function getBenefits(): ?string
    {
        return $this->benefits;
    }

    public function setBenefits(?string $benefits): static
    {
        $this->benefits = $benefits;
        return $this;
    }

    public function getNeverRules(): ?string
    {
        return $this->neverRules;
    }

    public function setNeverRules(?string $neverRules): static
    {
        $this->neverRules = $neverRules;
        return $this;
    }
}
