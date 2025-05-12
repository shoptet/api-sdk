<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeFilenameNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeFilenameNullable,
    ) {
        if ($this->typeFilenameNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9a-zA-Z\-.]+$/', $this->typeFilenameNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeFilenameNullable', $this->typeFilenameNullable));
        }
        if (mb_strlen($this->typeFilenameNullable) < '1') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too short. %s should be at least %s characters long', 'typeFilenameNullable', $this->typeFilenameNullable, '1', 'typeFilenameNullable'));
        }
        if (mb_strlen($this->typeFilenameNullable) > '255') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeFilenameNullable', $this->typeFilenameNullable, '255', 'typeFilenameNullable'));
        }
    }

    public function equals(self $typeFilenameNullable): bool
    {
        return $typeFilenameNullable->typeFilenameNullable === $this->typeFilenameNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeFilenameNullable;
    }
}
