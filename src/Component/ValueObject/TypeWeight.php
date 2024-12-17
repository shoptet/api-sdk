<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeWeight implements ValueObjectInterface
{
    public function __construct(
        public string $typeWeight,
    ) {
        if (!preg_match('/^[0-9]{1,6}\.[0-9]{3}$/', $this->typeWeight)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeWeight', $this->typeWeight));
        }
    }

    public function equals(self $typeWeight): bool
    {
        return $typeWeight->typeWeight === $this->typeWeight;
    }

    public function __toString(): string
    {
        return $this->typeWeight;
    }
}
