<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeColor implements ValueObjectInterface
{
    public function __construct(
        public string $typeColor,
    ) {
        if (!preg_match('/^#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $this->typeColor)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeColor', $this->typeColor));
        }
    }

    public function equals(self $typeColor): bool
    {
        return $typeColor->typeColor === $this->typeColor;
    }

    public function __toString(): string
    {
        return $this->typeColor;
    }
}
