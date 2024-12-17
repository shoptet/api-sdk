<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeConstSymbol implements ValueObjectInterface
{
    public function __construct(
        public string $typeConstSymbol,
    ) {
        if (!preg_match('/^[0-9]{1,4}$/', $this->typeConstSymbol)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeConstSymbol', $this->typeConstSymbol));
        }
    }

    public function equals(self $typeConstSymbol): bool
    {
        return $typeConstSymbol->typeConstSymbol === $this->typeConstSymbol;
    }

    public function __toString(): string
    {
        return $this->typeConstSymbol;
    }
}
