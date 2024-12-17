<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderGiftSettingsResponse\UpdateOrderGiftSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected bool $stockDependent;
    protected bool $wholesaleGiftsEnabled;
    protected string $productGifts;

    public function isStockDependent(): bool
    {
        return $this->stockDependent;
    }

    public function setStockDependent(bool $stockDependent): static
    {
        $this->stockDependent = $stockDependent;
        return $this;
    }

    public function isWholesaleGiftsEnabled(): bool
    {
        return $this->wholesaleGiftsEnabled;
    }

    public function setWholesaleGiftsEnabled(bool $wholesaleGiftsEnabled): static
    {
        $this->wholesaleGiftsEnabled = $wholesaleGiftsEnabled;
        return $this;
    }

    public function getProductGifts(): string
    {
        return $this->productGifts;
    }

    public function setProductGifts(string $productGifts): static
    {
        $this->productGifts = $productGifts;
        return $this;
    }
}
