<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;

class ArticleList extends Entity
{
    protected int $id;
    protected ?int $defaultSectionId;
    protected ?int $sectionId;
    protected string $title;
    protected ?string $url;
    protected TypeDateTimeNullable $publishDate;
    protected bool $visible;
    protected ?string $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getDefaultSectionId(): ?int
    {
        return $this->defaultSectionId;
    }

    public function setDefaultSectionId(?int $defaultSectionId): static
    {
        $this->defaultSectionId = $defaultSectionId;
        return $this;
    }

    public function getSectionId(): ?int
    {
        return $this->sectionId;
    }

    public function setSectionId(?int $sectionId): static
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

    public function getPublishDate(): TypeDateTimeNullable
    {
        return $this->publishDate;
    }

    public function setPublishDate(TypeDateTimeNullable $publishDate): static
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
