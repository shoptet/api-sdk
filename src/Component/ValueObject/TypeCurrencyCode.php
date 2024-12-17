<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeCurrencyCode implements ValueObjectInterface
{
    public function __construct(
        public string $typeCurrencyCode,
    ) {
        if (!preg_match('/^[a-zA-Z]{3}$/', $this->typeCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeCurrencyCode', $this->typeCurrencyCode));
        }
    }

    public function equals(self $typeCurrencyCode): bool
    {
        return $typeCurrencyCode->typeCurrencyCode === $this->typeCurrencyCode;
    }

    public function __toString(): string
    {
        return $this->typeCurrencyCode;
    }
}
