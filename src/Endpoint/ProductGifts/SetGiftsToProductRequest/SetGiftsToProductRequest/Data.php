<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SetGiftsToProductRequest\SetGiftsToProductRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SetGiftsToProductRequest\SetGiftsToProductRequest\Data\GiftCodes;

class Data extends Entity
{
    protected GiftCodes $giftCodes;

    public function getGiftCodes(): GiftCodes
    {
        return $this->giftCodes;
    }

    public function setGiftCodes(GiftCodes $giftCodes): static
    {
        $this->giftCodes = $giftCodes;
        return $this;
    }
}
