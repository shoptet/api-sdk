<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetailsResponse\GetShippingRequestForCartDetailsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Eshop extends Entity
{
    protected int $eshopId;
    protected string $eshopUrl;
    protected bool $vatPayer;

    public function getEshopId(): int
    {
        return $this->eshopId;
    }

    public function setEshopId(int $eshopId): static
    {
        $this->eshopId = $eshopId;
        return $this;
    }

    public function getEshopUrl(): string
    {
        return $this->eshopUrl;
    }

    public function setEshopUrl(string $eshopUrl): static
    {
        $this->eshopUrl = $eshopUrl;
        return $this;
    }

    public function isVatPayer(): bool
    {
        return $this->vatPayer;
    }

    public function setVatPayer(bool $vatPayer): static
    {
        $this->vatPayer = $vatPayer;
        return $this;
    }
}
