<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeGuidNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeGuidNullable,
    ) {
        if ($this->typeGuidNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/', $this->typeGuidNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeGuidNullable', $this->typeGuidNullable));
        }
        if (mb_strlen($this->typeGuidNullable) > '36') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeGuidNullable', $this->typeGuidNullable, '36', 'typeGuidNullable'));
        }
    }

    public function equals(self $typeGuidNullable): bool
    {
        return $typeGuidNullable->typeGuidNullable === $this->typeGuidNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeGuidNullable;
    }
}
