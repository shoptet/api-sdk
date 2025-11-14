<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;

class Currency extends Entity
{
    protected TypeCurrencyCode $code;
    protected ?string $exchangeRate;

    public function getCode(): TypeCurrencyCode
    {
        return $this->code;
    }

    public function setCode(TypeCurrencyCode $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getExchangeRate(): ?string
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(?string $exchangeRate): static
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
}
