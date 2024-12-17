<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypePrice implements ValueObjectInterface
{
    public function __construct(
        public ?string $typePrice,
    ) {
        if ($this->typePrice === null) {
            return;
        }
        if (!preg_match('/^(-)?[0-9]+\.[0-9]{2}$/', $this->typePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typePrice', $this->typePrice));
        }
    }

    public function equals(self $typePrice): bool
    {
        return $typePrice->typePrice === $this->typePrice;
    }

    public function __toString(): string
    {
        return $this->typePrice ?? '';
    }
}
