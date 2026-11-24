<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\GetOrderGiftDetailResponse\GetOrderGiftDetailResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\OrderGift;

class Data extends Entity
{
    protected OrderGift $gift;

    public function getGift(): OrderGift
    {
        return $this->gift;
    }

    public function setGift(OrderGift $gift): static
    {
        $this->gift = $gift;
        return $this;
    }
}
