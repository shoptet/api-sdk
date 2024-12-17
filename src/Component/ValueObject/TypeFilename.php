<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeFilename implements ValueObjectInterface
{
    public function __construct(
        public string $typeFilename,
    ) {
        if (!preg_match('/^[0-9a-zA-Z\-.]+$/', $this->typeFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeFilename', $this->typeFilename));
        }
        if (mb_strlen($this->typeFilename) < '1') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too short. %s should be at least %s characters long', 'typeFilename', $this->typeFilename, '1', 'typeFilename'));
        }
        if (mb_strlen($this->typeFilename) > '255') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeFilename', $this->typeFilename, '255', 'typeFilename'));
        }
    }

    public function equals(self $typeFilename): bool
    {
        return $typeFilename->typeFilename === $this->typeFilename;
    }

    public function __toString(): string
    {
        return $this->typeFilename;
    }
}
