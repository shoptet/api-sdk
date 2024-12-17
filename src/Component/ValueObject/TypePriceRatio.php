<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypePriceRatio implements ValueObjectInterface
{
    public function __construct(
        public string $typePriceRatio,
    ) {
        if (!preg_match('/[0-9]+\.[0-9]{4}$/', $this->typePriceRatio)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typePriceRatio', $this->typePriceRatio));
        }
    }

    public function equals(self $typePriceRatio): bool
    {
        return $typePriceRatio->typePriceRatio === $this->typePriceRatio;
    }

    public function __toString(): string
    {
        return $this->typePriceRatio;
    }
}
