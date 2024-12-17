<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class ArticleList extends Entity
{
    protected float $id;
    protected ?float $defaultSectionId;
    protected ?float $sectionId;
    protected string $title;
    protected ?string $url;
    protected ?TypeDateTime $publishDate;
    protected bool $visible;
    protected ?string $image;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getDefaultSectionId(): ?float
    {
        return $this->defaultSectionId;
    }

    public function setDefaultSectionId(?float $defaultSectionId): static
    {
        $this->defaultSectionId = $defaultSectionId;
        return $this;
    }

    public function getSectionId(): ?float
    {
        return $this->sectionId;
    }

    public function setSectionId(?float $sectionId): static
    {
        $this->sectionId = $sectionId;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
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

    public function getPublishDate(): ?TypeDateTime
    {
        return $this->publishDate;
    }

    public function setPublishDate(?TypeDateTime $publishDate): static
    {
        $this->publishDate = $publishDate;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }
}
