<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ArticleSection extends Entity
{
    protected float $id;
    protected ?float $parentId;
    protected string $title;
    protected string $language;
    protected ?string $indexName;
    protected ?string $url;
    protected ?string $description;
    protected ?string $secondDescription;
    protected ?float $limit;
    protected ?float $homepageLimit;
    protected ?string $sorting;
    protected ?float $perexLimit;
    protected ?bool $hidePublishDate;
    protected ?bool $showPrevNext;
    protected ?bool $showOnHomepage;
    protected ?string $linkText;
    protected ?string $metaTitle;
    protected ?string $metaDescription;
    protected ?string $canonicalLinkUrl;
    protected ?bool $visible;
    protected ?string $access;
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

    public function getParentId(): ?float
    {
        return $this->parentId;
    }

    public function setParentId(?float $parentId): static
    {
        $this->parentId = $parentId;
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

    public function getLimit(): ?float
    {
        return $this->limit;
    }

    public function setLimit(?float $limit): static
    {
        $this->limit = $limit;
        return $this;
    }

    public function getHomepageLimit(): ?float
    {
        return $this->homepageLimit;
    }

    public function setHomepageLimit(?float $homepageLimit): static
    {
        $this->homepageLimit = $homepageLimit;
        return $this;
    }

    public function getSorting(): ?string
    {
        return $this->sorting;
    }

    public function setSorting(?string $sorting): static
    {
        $this->sorting = $sorting;
        return $this;
    }

    public function getPerexLimit(): ?float
    {
        return $this->perexLimit;
    }

    public function setPerexLimit(?float $perexLimit): static
    {
        $this->perexLimit = $perexLimit;
        return $this;
    }

    public function getHidePublishDate(): ?bool
    {
        return $this->hidePublishDate;
    }

    public function setHidePublishDate(?bool $hidePublishDate): static
    {
        $this->hidePublishDate = $hidePublishDate;
        return $this;
    }

    public function getShowPrevNext(): ?bool
    {
        return $this->showPrevNext;
    }

    public function setShowPrevNext(?bool $showPrevNext): static
    {
        $this->showPrevNext = $showPrevNext;
        return $this;
    }

    public function getShowOnHomepage(): ?bool
    {
        return $this->showOnHomepage;
    }

    public function setShowOnHomepage(?bool $showOnHomepage): static
    {
        $this->showOnHomepage = $showOnHomepage;
        return $this;
    }

    public function getLinkText(): ?string
    {
        return $this->linkText;
    }

    public function setLinkText(?string $linkText): static
    {
        $this->linkText = $linkText;
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

    public function getCanonicalLinkUrl(): ?string
    {
        return $this->canonicalLinkUrl;
    }

    public function setCanonicalLinkUrl(?string $canonicalLinkUrl): static
    {
        $this->canonicalLinkUrl = $canonicalLinkUrl;
        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(?string $access): static
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
