<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeExchangeRate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;

class Price extends Entity
{
    protected TypePriceNullable $vat;
    protected TypePriceNullable $toPay;
    protected TypeCurrencyCode $currencyCode;
    protected TypePriceNullable $withoutVat;
    protected TypePriceNullable $withVat;
    protected TypeExchangeRate $exchangeRate;
    protected ?TypePriceNullable $partialPaymentAmount;
    protected ?string $partialPaymentType;

    public function getVat(): TypePriceNullable
    {
        return $this->vat;
    }

    public function setVat(TypePriceNullable $vat): static
    {
        $this->vat = $vat;
        return $this;
    }

    public function getToPay(): TypePriceNullable
    {
        return $this->toPay;
    }

    public function setToPay(TypePriceNullable $toPay): static
    {
        $this->toPay = $toPay;
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

    public function getWithoutVat(): TypePriceNullable
    {
        return $this->withoutVat;
    }

    public function setWithoutVat(TypePriceNullable $withoutVat): static
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    public function getWithVat(): TypePriceNullable
    {
        return $this->withVat;
    }

    public function setWithVat(TypePriceNullable $withVat): static
    {
        $this->withVat = $withVat;
        return $this;
    }

    public function getExchangeRate(): TypeExchangeRate
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(TypeExchangeRate $exchangeRate): static
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    public function getPartialPaymentAmount(): ?TypePriceNullable
    {
        return $this->partialPaymentAmount;
    }

    public function setPartialPaymentAmount(?TypePriceNullable $partialPaymentAmount): static
    {
        $this->partialPaymentAmount = $partialPaymentAmount;
        return $this;
    }

    public function getPartialPaymentType(): ?string
    {
        return $this->partialPaymentType;
    }

    public function setPartialPaymentType(?string $partialPaymentType): static
    {
        $this->partialPaymentType = $partialPaymentType;
        return $this;
    }
}
