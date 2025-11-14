<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeCurrencyCodeNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeCurrencyCodeNullable,
    ) {
        if ($this->typeCurrencyCodeNullable === null) {
            return;
        }
        if (!preg_match('/^[a-zA-Z]{3}$/', $this->typeCurrencyCodeNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeCurrencyCodeNullable', $this->typeCurrencyCodeNullable));
        }
    }

    public function equals(self $typeCurrencyCodeNullable): bool
    {
        return $typeCurrencyCodeNullable->typeCurrencyCodeNullable === $this->typeCurrencyCodeNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeCurrencyCodeNullable;
    }
}
