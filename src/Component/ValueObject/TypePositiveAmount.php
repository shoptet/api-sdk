<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypePositiveAmount implements ValueObjectInterface
{
    public function __construct(
        public ?string $typePositiveAmount,
    ) {
        if ($this->typePositiveAmount === null) {
            return;
        }
        if (!preg_match('/^[0-9]+\.[0-9]{3}$/', $this->typePositiveAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typePositiveAmount', $this->typePositiveAmount));
        }
    }

    public function equals(self $typePositiveAmount): bool
    {
        return $typePositiveAmount->typePositiveAmount === $this->typePositiveAmount;
    }

    public function __toString(): string
    {
        return $this->typePositiveAmount ?? '';
    }
}
