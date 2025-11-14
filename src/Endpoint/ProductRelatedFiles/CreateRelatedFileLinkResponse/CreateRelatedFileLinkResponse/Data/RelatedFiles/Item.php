<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles\CreateRelatedFileLinkResponse\CreateRelatedFileLinkResponse\Data\RelatedFiles;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected ?string $name;
    protected string $url;
    protected ?int $size;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
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

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): static
    {
        $this->size = $size;
        return $this;
    }
}
