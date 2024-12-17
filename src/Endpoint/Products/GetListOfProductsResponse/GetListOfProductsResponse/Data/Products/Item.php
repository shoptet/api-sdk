<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products;

use Shoptet\Api\Sdk\Php\Component\Entity\BrandNamed;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Supplier;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeAmount;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products\Item\DefaultCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsResponse\GetListOfProductsResponse\Data\Products\Item\MainImage;

class Item extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected string $name;
    protected string $type;
    protected ?string $url;
    protected string $visibility;
    protected TypeDateTime $creationTime;
    protected ?TypeDateTime $changeTime;
    protected ?BrandNamed $brand;
    protected ?Supplier $supplier;
    protected DefaultCategory $defaultCategory;
    protected ?MainImage $mainImage;
    protected ?TypeAmount $voteAverageScore;
    protected ?int $voteCount;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getVisibility(): string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): static
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
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

    public function getBrand(): ?BrandNamed
    {
        return $this->brand;
    }

    public function setBrand(?BrandNamed $brand): static
    {
        $this->brand = $brand;
        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;
        return $this;
    }

    public function getDefaultCategory(): DefaultCategory
    {
        return $this->defaultCategory;
    }

    public function setDefaultCategory(DefaultCategory $defaultCategory): static
    {
        $this->defaultCategory = $defaultCategory;
        return $this;
    }

    public function getMainImage(): ?MainImage
    {
        return $this->mainImage;
    }

    public function setMainImage(?MainImage $mainImage): static
    {
        $this->mainImage = $mainImage;
        return $this;
    }

    public function getVoteAverageScore(): ?TypeAmount
    {
        return $this->voteAverageScore;
    }

    public function setVoteAverageScore(?TypeAmount $voteAverageScore): static
    {
        $this->voteAverageScore = $voteAverageScore;
        return $this;
    }

    public function getVoteCount(): ?int
    {
        return $this->voteCount;
    }

    public function setVoteCount(?int $voteCount): static
    {
        $this->voteCount = $voteCount;
        return $this;
    }
}
