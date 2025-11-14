<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryRequest\CreateParametricCategoryRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeFilenameNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryRequest\CreateParametricCategoryRequest\Data\Parameters;

class Data extends Entity
{
    protected string $name;
    protected TypeGuid $originalCategoryGuid;
    protected Parameters $parameters;
    protected ?string $indexName;
    protected ?string $description;
    protected ?string $secondDescription;
    protected ?TypeFilenameNullable $sourceImageName;
    protected ?string $title;
    protected ?string $metaTagDescription;
    protected ?bool $showInList;
    protected ?bool $showInDetail;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getOriginalCategoryGuid(): TypeGuid
    {
        return $this->originalCategoryGuid;
    }

    public function setOriginalCategoryGuid(TypeGuid $originalCategoryGuid): static
    {
        $this->originalCategoryGuid = $originalCategoryGuid;
        return $this;
    }

    public function getParameters(): Parameters
    {
        return $this->parameters;
    }

    public function setParameters(Parameters $parameters): static
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function getIndexName(): ?string
    {
        return $this->indexName;
    }

    public function setIndexName(?string $indexName): static
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

    public function getSecondDescription(): ?string
    {
        return $this->secondDescription;
    }

    public function setSecondDescription(?string $secondDescription): static
    {
        $this->secondDescription = $secondDescription;
        return $this;
    }

    public function getSourceImageName(): ?TypeFilenameNullable
    {
        return $this->sourceImageName;
    }

    public function setSourceImageName(?TypeFilenameNullable $sourceImageName): static
    {
        $this->sourceImageName = $sourceImageName;
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

    public function getShowInList(): ?bool
    {
        return $this->showInList;
    }

    public function setShowInList(?bool $showInList): static
    {
        $this->showInList = $showInList;
        return $this;
    }

    public function getShowInDetail(): ?bool
    {
        return $this->showInDetail;
    }

    public function setShowInDetail(?bool $showInDetail): static
    {
        $this->showInDetail = $showInDetail;
        return $this;
    }
}
