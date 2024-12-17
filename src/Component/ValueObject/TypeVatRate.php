<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeVatRate implements ValueObjectInterface
{
    public function __construct(
        public string $typeVatRate,
    ) {
        if (!preg_match('/^[0-9]+\.[0-9]{2}$/', $this->typeVatRate)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeVatRate', $this->typeVatRate));
        }
    }

    public function equals(self $typeVatRate): bool
    {
        return $typeVatRate->typeVatRate === $this->typeVatRate;
    }

    public function __toString(): string
    {
        return $this->typeVatRate;
    }
}
