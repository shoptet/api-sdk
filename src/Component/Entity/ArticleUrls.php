<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ArticleUrls extends Entity
{
    protected float $sectionId;
    protected string $url;

    public function getSectionId(): float
    {
        return $this->sectionId;
    }

    public function setSectionId(float $sectionId): static
    {
        $this->sectionId = $sectionId;
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
}
