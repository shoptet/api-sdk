<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages\CreatePageRequest\CreatePageRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeFilenameNullable;

class Data extends Entity
{
    protected string $title;
    protected ?string $indexName;
    protected ?string $description;
    protected ?string $linkText;
    protected ?string $metaTitle;
    protected ?string $metaDescription;
    protected ?string $canonicalUrl;
    protected ?bool $visible;
    protected ?string $access;
    protected ?TypeFilenameNullable $sourceOgImageName;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
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

    public function getCanonicalUrl(): ?string
    {
        return $this->canonicalUrl;
    }

    public function setCanonicalUrl(?string $canonicalUrl): static
    {
        $this->canonicalUrl = $canonicalUrl;
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

    public function getSourceOgImageName(): ?TypeFilenameNullable
    {
        return $this->sourceOgImageName;
    }

    public function setSourceOgImageName(?TypeFilenameNullable $sourceOgImageName): static
    {
        $this->sourceOgImageName = $sourceOgImageName;
        return $this;
    }
}
