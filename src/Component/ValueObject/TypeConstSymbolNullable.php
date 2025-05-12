<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeConstSymbolNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeConstSymbolNullable,
    ) {
        if ($this->typeConstSymbolNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9]{1,4}$/', $this->typeConstSymbolNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeConstSymbolNullable', $this->typeConstSymbolNullable));
        }
    }

    public function equals(self $typeConstSymbolNullable): bool
    {
        return $typeConstSymbolNullable->typeConstSymbolNullable === $this->typeConstSymbolNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeConstSymbolNullable;
    }
}
