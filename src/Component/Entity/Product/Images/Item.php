<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Images;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected string $name;
    protected string $seoName;
    protected string $cdnName;
    protected ?int $priority;
    protected ?string $description;
    protected ?TypeDateTime $changeTime;
    protected ?bool $isMainImage;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getSeoName(): string
    {
        return $this->seoName;
    }

    public function setSeoName(string $seoName): static
    {
        $this->seoName = $seoName;
        return $this;
    }

    public function getCdnName(): string
    {
        return $this->cdnName;
    }

    public function setCdnName(string $cdnName): static
    {
        $this->cdnName = $cdnName;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getIsMainImage(): ?bool
    {
        return $this->isMainImage;
    }

    public function setIsMainImage(?bool $isMainImage): static
    {
        $this->isMainImage = $isMainImage;
        return $this;
    }
}
