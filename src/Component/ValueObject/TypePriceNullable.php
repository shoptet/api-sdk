<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypePriceNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typePriceNullable,
    ) {
        if ($this->typePriceNullable === null) {
            return;
        }
        if (!preg_match('/^(-)?[0-9]+\.[0-9]{2}$/', $this->typePriceNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typePriceNullable', $this->typePriceNullable));
        }
    }

    public function equals(self $typePriceNullable): bool
    {
        return $typePriceNullable->typePriceNullable === $this->typePriceNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typePriceNullable;
    }
}
