<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGiftRequest\CreateProductGiftRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $giftCode;

    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    public function setGiftCode(string $giftCode): static
    {
        $this->giftCode = $giftCode;
        return $this;
    }
}
