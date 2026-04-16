<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeVatRateNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeVatRateNullable,
    ) {
        if ($this->typeVatRateNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9]+\.[0-9]{2}$/', $this->typeVatRateNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeVatRateNullable', $this->typeVatRateNullable));
        }
    }

    public function equals(self $typeVatRateNullable): bool
    {
        return $typeVatRateNullable->typeVatRateNullable === $this->typeVatRateNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeVatRateNullable;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
