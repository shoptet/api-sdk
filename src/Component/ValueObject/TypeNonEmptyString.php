<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeNonEmptyString implements ValueObjectInterface
{
    public function __construct(
        public string $typeNonEmptyString,
    ) {
        if (mb_strlen($this->typeNonEmptyString) < '1') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too short. %s should be at least %s characters long', 'typeNonEmptyString', $this->typeNonEmptyString, '1', 'typeNonEmptyString'));
        }
    }

    public function equals(self $typeNonEmptyString): bool
    {
        return $typeNonEmptyString->typeNonEmptyString === $this->typeNonEmptyString;
    }

    public function __toString(): string
    {
        return $this->typeNonEmptyString;
    }
}
