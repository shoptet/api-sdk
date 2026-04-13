<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class CategoryBatchUpdate extends CategoryUpdate
{
    protected ?string $language;

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): static
    {
        $this->language = $language;
        return $this;
    }
}
