<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDate implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeDate,
    ) {
        if ($this->typeDate === null) {
            return;
        }
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $this->typeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDate', $this->typeDate));
        }
    }

    public function equals(self $typeDate): bool
    {
        return $typeDate->typeDate === $this->typeDate;
    }

    public function __toString(): string
    {
        return $this->typeDate ?? '';
    }
}
