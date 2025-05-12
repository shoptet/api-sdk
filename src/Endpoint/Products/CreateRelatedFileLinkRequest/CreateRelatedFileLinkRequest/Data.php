<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateRelatedFileLinkRequest\CreateRelatedFileLinkRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $sourceFileName;
    protected ?string $description;

    public function getSourceFileName(): string
    {
        return $this->sourceFileName;
    }

    public function setSourceFileName(string $sourceFileName): static
    {
        $this->sourceFileName = $sourceFileName;
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
}
