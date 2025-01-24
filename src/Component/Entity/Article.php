<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\Article\SectionIds;
use Shoptet\Api\Sdk\Php\Component\Entity\Article\Urls;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Article extends Entity
{
    protected float $id;
    protected ?float $defaultSectionId;

    /** @deprecated */
    protected ?float $sectionId;
    protected ?SectionIds $sectionIds;
    protected string $title;
    protected string $language;
    protected ?string $indexName;
    protected ?string $url;
    protected ?Urls $urls;
    protected ?string $redirectUrl;
    protected ?string $content;
    protected ?string $metaTitle;

    /** @deprecated */
    protected ?string $metaKeywords;
    protected ?string $metaDescription;
    protected ?TypeDateTime $publishDate;
    protected ?TypeDateTime $changeDate;
    protected bool $visible;
    protected string $access;
    protected ?string $image;
    protected ?string $ogImage;

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

    /**
     * @deprecated
     */
    public function getSectionId(): ?float
    {
        return $this->sectionId;
    }

    /**
     * @deprecated
     */
    public function setSectionId(?float $sectionId): static
    {
        $this->sectionId = $sectionId;
        return $this;
    }

    public function getSectionIds(): ?SectionIds
    {
        return $this->sectionIds;
    }

    public function setSectionIds(?SectionIds $sectionIds): static
    {
        $this->sectionIds = $sectionIds;
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

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getUrls(): ?Urls
    {
        return $this->urls;
    }

    public function setUrls(?Urls $urls): static
    {
        $this->urls = $urls;
        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(?string $redirectUrl): static
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;
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

    /**
     * @deprecated
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @deprecated
     */
    public function setMetaKeywords(?string $metaKeywords): static
    {
        $this->metaKeywords = $metaKeywords;
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

    public function getPublishDate(): ?TypeDateTime
    {
        return $this->publishDate;
    }

    public function setPublishDate(?TypeDateTime $publishDate): static
    {
        $this->publishDate = $publishDate;
        return $this;
    }

    public function getChangeDate(): ?TypeDateTime
    {
        return $this->changeDate;
    }

    public function setChangeDate(?TypeDateTime $changeDate): static
    {
        $this->changeDate = $changeDate;
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

    public function getAccess(): string
    {
        return $this->access;
    }

    public function setAccess(string $access): static
    {
        $this->access = $access;
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

    public function getOgImage(): ?string
    {
        return $this->ogImage;
    }

    public function setOgImage(?string $ogImage): static
    {
        $this->ogImage = $ogImage;
        return $this;
    }
}
