<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypePositiveAmountNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typePositiveAmountNullable,
    ) {
        if ($this->typePositiveAmountNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9]+\.[0-9]{3}$/', $this->typePositiveAmountNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typePositiveAmountNullable', $this->typePositiveAmountNullable));
        }
    }

    public function equals(self $typePositiveAmountNullable): bool
    {
        return $typePositiveAmountNullable->typePositiveAmountNullable === $this->typePositiveAmountNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typePositiveAmountNullable;
    }
}
