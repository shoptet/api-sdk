<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\OnlineStoreDesign;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Header extends Entity
{
    protected ?string $logoUrl;

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): static
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }
}
