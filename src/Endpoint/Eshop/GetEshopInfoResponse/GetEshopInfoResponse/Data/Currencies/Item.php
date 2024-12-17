<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Currencies;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeExchangeRate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePrice;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Currencies\Item\BankAccount;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Currencies\Item\Display;

class Item extends Entity
{
    protected string $code;
    protected string $title;
    protected bool $isDefault;
    protected bool $isDefaultAdmin;
    protected bool $isDefaultDocuments;
    protected bool $isVisible;
    protected TypeExchangeRate $exchangeRate;
    protected int $priority;
    protected Display $display;
    protected int $priceDecimalPlaces;
    protected int $documentPriceDecimalPlaces;
    protected string $rounding;
    protected TypePrice $minimalOrderValue;
    protected BankAccount $bankAccount;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function isIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): static
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function isIsDefaultAdmin(): bool
    {
        return $this->isDefaultAdmin;
    }

    public function setIsDefaultAdmin(bool $isDefaultAdmin): static
    {
        $this->isDefaultAdmin = $isDefaultAdmin;
        return $this;
    }

    public function isIsDefaultDocuments(): bool
    {
        return $this->isDefaultDocuments;
    }

    public function setIsDefaultDocuments(bool $isDefaultDocuments): static
    {
        $this->isDefaultDocuments = $isDefaultDocuments;
        return $this;
    }

    public function isIsVisible(): bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): static
    {
        $this->isVisible = $isVisible;
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

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getDisplay(): Display
    {
        return $this->display;
    }

    public function setDisplay(Display $display): static
    {
        $this->display = $display;
        return $this;
    }

    public function getPriceDecimalPlaces(): int
    {
        return $this->priceDecimalPlaces;
    }

    public function setPriceDecimalPlaces(int $priceDecimalPlaces): static
    {
        $this->priceDecimalPlaces = $priceDecimalPlaces;
        return $this;
    }

    public function getDocumentPriceDecimalPlaces(): int
    {
        return $this->documentPriceDecimalPlaces;
    }

    public function setDocumentPriceDecimalPlaces(int $documentPriceDecimalPlaces): static
    {
        $this->documentPriceDecimalPlaces = $documentPriceDecimalPlaces;
        return $this;
    }

    public function getRounding(): string
    {
        return $this->rounding;
    }

    public function setRounding(string $rounding): static
    {
        $this->rounding = $rounding;
        return $this;
    }

    public function getMinimalOrderValue(): TypePrice
    {
        return $this->minimalOrderValue;
    }

    public function setMinimalOrderValue(TypePrice $minimalOrderValue): static
    {
        $this->minimalOrderValue = $minimalOrderValue;
        return $this;
    }

    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    public function setBankAccount(BankAccount $bankAccount): static
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }
}
