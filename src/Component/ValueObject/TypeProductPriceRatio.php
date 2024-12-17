<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeProductPriceRatio implements ValueObjectInterface
{
    public function __construct(
        public string $typeProductPriceRatio,
    ) {
        if (!preg_match('/[0-9]+\.[0-9]{3}$/', $this->typeProductPriceRatio)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeProductPriceRatio', $this->typeProductPriceRatio));
        }
    }

    public function equals(self $typeProductPriceRatio): bool
    {
        return $typeProductPriceRatio->typeProductPriceRatio === $this->typeProductPriceRatio;
    }

    public function __toString(): string
    {
        return $this->typeProductPriceRatio;
    }
}
