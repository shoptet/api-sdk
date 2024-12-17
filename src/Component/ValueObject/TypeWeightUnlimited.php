<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeWeightUnlimited implements ValueObjectInterface
{
    public function __construct(
        public string $typeWeightUnlimited,
    ) {
        if (!preg_match('/^[0-9]+\.[0-9]{3}$/', $this->typeWeightUnlimited)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeWeightUnlimited', $this->typeWeightUnlimited));
        }
    }

    public function equals(self $typeWeightUnlimited): bool
    {
        return $typeWeightUnlimited->typeWeightUnlimited === $this->typeWeightUnlimited;
    }

    public function __toString(): string
    {
        return $this->typeWeightUnlimited;
    }
}
