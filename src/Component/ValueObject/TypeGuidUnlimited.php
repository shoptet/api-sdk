<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeGuidUnlimited implements ValueObjectInterface
{
    public function __construct(
        public string $typeGuidUnlimited,
    ) {
        if (mb_strlen($this->typeGuidUnlimited) > '36') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeGuidUnlimited', $this->typeGuidUnlimited, '36', 'typeGuidUnlimited'));
        }
    }

    public function equals(self $typeGuidUnlimited): bool
    {
        return $typeGuidUnlimited->typeGuidUnlimited === $this->typeGuidUnlimited;
    }

    public function __toString(): string
    {
        return $this->typeGuidUnlimited;
    }
}
