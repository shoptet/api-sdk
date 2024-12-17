<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeAmount implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeAmount,
    ) {
        if ($this->typeAmount === null) {
            return;
        }
        if (!preg_match('/^(-)?[0-9]+\.[0-9]{3}$/', $this->typeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeAmount', $this->typeAmount));
        }
    }

    public function equals(self $typeAmount): bool
    {
        return $typeAmount->typeAmount === $this->typeAmount;
    }

    public function __toString(): string
    {
        return $this->typeAmount ?? '';
    }
}
