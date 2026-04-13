<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\AddOrderGiftRequest\AddOrderGiftRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Data extends Entity
{
    protected string $code;
    protected TypeCurrencyCode $currencyCode;
    protected TypePriceNullable $orderPrice;
    protected ?bool $includingVat;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getCurrencyCode(): TypeCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(TypeCurrencyCode $currencyCode): static
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getOrderPrice(): TypePriceNullable
    {
        return $this->orderPrice;
    }

    public function setOrderPrice(TypePriceNullable $orderPrice): static
    {
        $this->orderPrice = $orderPrice;
        return $this;
    }

    public function getIncludingVat(): ?bool
    {
        return $this->includingVat;
    }

    public function setIncludingVat(?bool $includingVat): static
    {
        $this->includingVat = $includingVat;
        return $this;
    }
}
