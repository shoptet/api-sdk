<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest\Data\CopyProperties;

class Data extends Entity
{
    protected string $name;
    protected ?bool $isVisible;
    protected ?CopyProperties $copyProperties;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(?bool $isVisible): static
    {
        $this->isVisible = $isVisible;
        return $this;
    }

    public function getCopyProperties(): ?CopyProperties
    {
        return $this->copyProperties;
    }

    public function setCopyProperties(?CopyProperties $copyProperties): static
    {
        $this->copyProperties = $copyProperties;
        return $this;
    }
}
