<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class TypeVarSymbolNullable implements ValueObjectInterface
{
    public function __construct(
        public ?int $typeVarSymbolNullable,
    ) {
        if ($this->typeVarSymbolNullable === null) {
            return;
        }
    }

    public function equals(self $typeVarSymbolNullable): bool
    {
        return $typeVarSymbolNullable->typeVarSymbolNullable === $this->typeVarSymbolNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeVarSymbolNullable;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
