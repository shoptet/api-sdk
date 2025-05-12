<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeAmountNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeAmountNullable,
    ) {
        if ($this->typeAmountNullable === null) {
            return;
        }
        if (!preg_match('/^(-)?[0-9]+\.[0-9]{3}$/', $this->typeAmountNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeAmountNullable', $this->typeAmountNullable));
        }
    }

    public function equals(self $typeAmountNullable): bool
    {
        return $typeAmountNullable->typeAmountNullable === $this->typeAmountNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeAmountNullable;
    }
}
