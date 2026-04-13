<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ArticleUrls extends Entity
{
    protected int $sectionId;
    protected string $url;

    public function getSectionId(): int
    {
        return $this->sectionId;
    }

    public function setSectionId(int $sectionId): static
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
