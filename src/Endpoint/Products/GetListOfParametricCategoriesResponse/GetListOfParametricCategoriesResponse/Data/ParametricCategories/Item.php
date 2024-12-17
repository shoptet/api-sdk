<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategoriesResponse\GetListOfParametricCategoriesResponse\Data\ParametricCategories;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategoriesResponse\GetListOfParametricCategoriesResponse\Data\ParametricCategories\Item\Parameters;

class Item extends Entity
{
    protected string $guid;
    protected string $name;
    protected string $indexName;
    protected string $url;
    protected ?string $description;
    protected ?string $secondDescription;
    protected ?string $image;
    protected ?string $title;
    protected ?string $metaTagDescription;
    protected ?string $originalCategoryGuid;
    protected bool $showInList;
    protected bool $showInDetail;
    protected ?Parameters $parameters;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
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

    public function getOriginalCategoryGuid(): ?string
    {
        return $this->originalCategoryGuid;
    }

    public function setOriginalCategoryGuid(?string $originalCategoryGuid): static
    {
        $this->originalCategoryGuid = $originalCategoryGuid;
        return $this;
    }

    public function isShowInList(): bool
    {
        return $this->showInList;
    }

    public function setShowInList(bool $showInList): static
    {
        $this->showInList = $showInList;
        return $this;
    }

    public function isShowInDetail(): bool
    {
        return $this->showInDetail;
    }

    public function setShowInDetail(bool $showInDetail): static
    {
        $this->showInDetail = $showInDetail;
        return $this;
    }

    public function getParameters(): ?Parameters
    {
        return $this->parameters;
    }

    public function setParameters(?Parameters $parameters): static
    {
        $this->parameters = $parameters;
        return $this;
    }
}
