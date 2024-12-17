<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProductRequest\SteGiftsToProductRequest\Data\GiftCodes;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $code;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }
}
