<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFilesRequest\UploadFilesRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeFilename;

class Item extends Entity
{
    protected string $sourceUrl;
    protected ?TypeFilename $name;

    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    public function setSourceUrl(string $sourceUrl): static
    {
        $this->sourceUrl = $sourceUrl;
        return $this;
    }

    public function getName(): ?TypeFilename
    {
        return $this->name;
    }

    public function setName(?TypeFilename $name): static
    {
        $this->name = $name;
        return $this;
    }
}
