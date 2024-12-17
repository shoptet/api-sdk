<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeExchangeRate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;

class Price extends Entity
{
    protected TypePrice $vat;
    protected TypePrice $toPay;
    protected TypeCurrencyCode $currencyCode;
    protected TypePrice $withoutVat;
    protected TypePrice $withVat;
    protected TypeExchangeRate $exchangeRate;
    protected ?TypePrice $partialPaymentAmount;
    protected ?string $partialPaymentType;

    public function getVat(): TypePrice
    {
        return $this->vat;
    }

    public function setVat(TypePrice $vat): static
    {
        $this->vat = $vat;
        return $this;
    }

    public function getToPay(): TypePrice
    {
        return $this->toPay;
    }

    public function setToPay(TypePrice $toPay): static
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

    public function getWithoutVat(): TypePrice
    {
        return $this->withoutVat;
    }

    public function setWithoutVat(TypePrice $withoutVat): static
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    public function getWithVat(): TypePrice
    {
        return $this->withVat;
    }

    public function setWithVat(TypePrice $withVat): static
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

    public function getPartialPaymentAmount(): ?TypePrice
    {
        return $this->partialPaymentAmount;
    }

    public function setPartialPaymentAmount(?TypePrice $partialPaymentAmount): static
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
