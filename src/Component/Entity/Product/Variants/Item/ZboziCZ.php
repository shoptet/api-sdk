<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product\Variants\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ZboziCZ extends Entity
{
    protected ?string $maximalCPC;
    protected ?string $maximalSearchCPC;
    protected ?bool $hidden;

    public function getMaximalCPC(): ?string
    {
        return $this->maximalCPC;
    }

    public function setMaximalCPC(?string $maximalCPC): static
    {
        $this->maximalCPC = $maximalCPC;
        return $this;
    }

    public function getMaximalSearchCPC(): ?string
    {
        return $this->maximalSearchCPC;
    }

    public function setMaximalSearchCPC(?string $maximalSearchCPC): static
    {
        $this->maximalSearchCPC = $maximalSearchCPC;
        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): static
    {
        $this->hidden = $hidden;
        return $this;
    }
}
