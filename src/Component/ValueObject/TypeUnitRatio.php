<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeUnitRatio implements ValueObjectInterface
{
    public function __construct(
        public string $typeUnitRatio,
    ) {
        if (!preg_match('/^[0-9]+\.[0-9]{9}$/', $this->typeUnitRatio)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeUnitRatio', $this->typeUnitRatio));
        }
    }

    public function equals(self $typeUnitRatio): bool
    {
        return $typeUnitRatio->typeUnitRatio === $this->typeUnitRatio;
    }

    public function __toString(): string
    {
        return $this->typeUnitRatio;
    }
}
