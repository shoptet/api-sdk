<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class MainImage extends Entity
{
    protected string $name;
    protected string $seoName;
    protected string $cdnName;
    protected float $priority;
    protected ?string $description;
    protected ?TypeDateTime $changeTime;

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

    public function getPriority(): float
    {
        return $this->priority;
    }

    public function setPriority(float $priority): static
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
}
