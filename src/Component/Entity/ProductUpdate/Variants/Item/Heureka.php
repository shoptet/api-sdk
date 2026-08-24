<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\ProductUpdate\Variants\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Heureka extends Entity
{
    protected ?bool $feedExcluded;
    protected ?bool $cartExcluded;

    public function getFeedExcluded(): ?bool
    {
        return $this->feedExcluded;
    }

    public function setFeedExcluded(?bool $feedExcluded): static
    {
        $this->feedExcluded = $feedExcluded;
        return $this;
    }

    public function getCartExcluded(): ?bool
    {
        return $this->cartExcluded;
    }

    public function setCartExcluded(?bool $cartExcluded): static
    {
        $this->cartExcluded = $cartExcluded;
        return $this;
    }
}
