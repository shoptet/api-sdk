<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class Brand extends Entity
{
    protected string $guid;
    protected string $name;
    protected string $indexName;
    protected ?string $description;
    protected ?string $brandWeb;
    protected bool $showInCategoriesMenu;
    protected bool $showInBrandList;
    protected ?string $metaTitle;
    protected ?string $metaDescription;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): static
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

    public function getIndexName(): string
    {
        return $this->indexName;
    }

    public function setIndexName(string $indexName): static
    {
        $this->indexName = $indexName;
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

    public function getBrandWeb(): ?string
    {
        return $this->brandWeb;
    }

    public function setBrandWeb(?string $brandWeb): static
    {
        $this->brandWeb = $brandWeb;
        return $this;
    }

    public function isShowInCategoriesMenu(): bool
    {
        return $this->showInCategoriesMenu;
    }

    public function setShowInCategoriesMenu(bool $showInCategoriesMenu): static
    {
        $this->showInCategoriesMenu = $showInCategoriesMenu;
        return $this;
    }

    public function isShowInBrandList(): bool
    {
        return $this->showInBrandList;
    }

    public function setShowInBrandList(bool $showInBrandList): static
    {
        $this->showInBrandList = $showInBrandList;
        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): static
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): static
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }
}
