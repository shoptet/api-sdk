<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCurrencyCode;

class SalesChannelCurrency extends Entity
{
    protected int $id;
    protected TypeCurrencyCode $code;
    protected string $title;
    protected string $symbol;
    protected bool $isSymbolOnLeft;
    protected int $precision;
    protected ?int $priority;
    protected string $decimalSeparator;
    protected ?string $thousandSeparator;
    protected int $documentPrecision;
    protected int $rounding;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getCode(): TypeCurrencyCode
    {
        return $this->code;
    }

    public function setCode(TypeCurrencyCode $code): static
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

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): static
    {
        $this->symbol = $symbol;
        return $this;
    }

    public function isIsSymbolOnLeft(): bool
    {
        return $this->isSymbolOnLeft;
    }

    public function setIsSymbolOnLeft(bool $isSymbolOnLeft): static
    {
        $this->isSymbolOnLeft = $isSymbolOnLeft;
        return $this;
    }

    public function getPrecision(): int
    {
        return $this->precision;
    }

    public function setPrecision(int $precision): static
    {
        $this->precision = $precision;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getDecimalSeparator(): string
    {
        return $this->decimalSeparator;
    }

    public function setDecimalSeparator(string $decimalSeparator): static
    {
        $this->decimalSeparator = $decimalSeparator;
        return $this;
    }

    public function getThousandSeparator(): ?string
    {
        return $this->thousandSeparator;
    }

    public function setThousandSeparator(?string $thousandSeparator): static
    {
        $this->thousandSeparator = $thousandSeparator;
        return $this;
    }

    public function getDocumentPrecision(): int
    {
        return $this->documentPrecision;
    }

    public function setDocumentPrecision(int $documentPrecision): static
    {
        $this->documentPrecision = $documentPrecision;
        return $this;
    }

    public function getRounding(): int
    {
        return $this->rounding;
    }

    public function setRounding(int $rounding): static
    {
        $this->rounding = $rounding;
        return $this;
    }
}
