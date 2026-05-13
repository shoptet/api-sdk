<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class TypeVarSymbol implements ValueObjectInterface
{
    public function __construct(
        public int $typeVarSymbol,
    ) {
    }

    public function equals(self $typeVarSymbol): bool
    {
        return $typeVarSymbol->typeVarSymbol === $this->typeVarSymbol;
    }

    public function __toString(): string
    {
        return (string) $this->typeVarSymbol;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
