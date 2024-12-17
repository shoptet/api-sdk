<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\Category\CatalogueMapping;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Category extends Entity
{
    protected ?TypeGuid $guid;
    protected string $name;
    protected ?string $image;
    protected ?string $description;
    protected ?string $secondDescription;
    protected string $indexName;
    protected string $url;
    protected ?TypeGuid $parentGuid;
    protected ?float $priority;
    protected ?string $menuTitle;
    protected ?string $title;
    protected ?string $metaTagDescription;
    protected bool $visible;
    protected ?string $similarProductsCategory;
    protected ?string $relatedProductsCategory;
    protected ?string $customerVisibility;
    protected ?string $productOrdering;
    protected CatalogueMapping $catalogueMapping;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
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

    public function getSecondDescription(): ?string
    {
        return $this->secondDescription;
    }

    public function setSecondDescription(?string $secondDescription): static
    {
        $this->secondDescription = $secondDescription;
        return $this;
    }

    public function getIndexName(): string
    {
        return $this->indexName;
    }

    public function setIndexName(string $indexName): static
    {
        $this->indexName = $indexName;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getParentGuid(): ?TypeGuid
    {
        return $this->parentGuid;
    }

    public function setParentGuid(?TypeGuid $parentGuid): static
    {
        $this->parentGuid = $parentGuid;
        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getMenuTitle(): ?string
    {
        return $this->menuTitle;
    }

    public function setMenuTitle(?string $menuTitle): static
    {
        $this->menuTitle = $menuTitle;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getMetaTagDescription(): ?string
    {
        return $this->metaTagDescription;
    }

    public function setMetaTagDescription(?string $metaTagDescription): static
    {
        $this->metaTagDescription = $metaTagDescription;
        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getSimilarProductsCategory(): ?string
    {
        return $this->similarProductsCategory;
    }

    public function setSimilarProductsCategory(?string $similarProductsCategory): static
    {
        $this->similarProductsCategory = $similarProductsCategory;
        return $this;
    }

    public function getRelatedProductsCategory(): ?string
    {
        return $this->relatedProductsCategory;
    }

    public function setRelatedProductsCategory(?string $relatedProductsCategory): static
    {
        $this->relatedProductsCategory = $relatedProductsCategory;
        return $this;
    }

    public function getCustomerVisibility(): ?string
    {
        return $this->customerVisibility;
    }

    public function setCustomerVisibility(?string $customerVisibility): static
    {
        $this->customerVisibility = $customerVisibility;
        return $this;
    }

    public function getProductOrdering(): ?string
    {
        return $this->productOrdering;
    }

    public function setProductOrdering(?string $productOrdering): static
    {
        $this->productOrdering = $productOrdering;
        return $this;
    }

    public function getCatalogueMapping(): CatalogueMapping
    {
        return $this->catalogueMapping;
    }

    public function setCatalogueMapping(CatalogueMapping $catalogueMapping): static
    {
        $this->catalogueMapping = $catalogueMapping;
        return $this;
    }
}
