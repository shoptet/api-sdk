<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeExchangeRate implements ValueObjectInterface
{
    public function __construct(
        public string $typeExchangeRate,
    ) {
        if (!preg_match('/^[0-9]+\.[0-9]{8}$/', $this->typeExchangeRate)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeExchangeRate', $this->typeExchangeRate));
        }
    }

    public function equals(self $typeExchangeRate): bool
    {
        return $typeExchangeRate->typeExchangeRate === $this->typeExchangeRate;
    }

    public function __toString(): string
    {
        return $this->typeExchangeRate;
    }
}
