<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class ProductBatchUpdate extends ProductUpdate
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
