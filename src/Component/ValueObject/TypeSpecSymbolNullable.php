<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class TypeSpecSymbolNullable implements ValueObjectInterface
{
    public function __construct(
        public ?int $typeSpecSymbolNullable,
    ) {
        if ($this->typeSpecSymbolNullable === null) {
            return;
        }
    }

    public function equals(self $typeSpecSymbolNullable): bool
    {
        return $typeSpecSymbolNullable->typeSpecSymbolNullable === $this->typeSpecSymbolNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeSpecSymbolNullable;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
