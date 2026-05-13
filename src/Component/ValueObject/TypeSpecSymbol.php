<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class TypeSpecSymbol implements ValueObjectInterface
{
    public function __construct(
        public int $typeSpecSymbol,
    ) {
    }

    public function equals(self $typeSpecSymbol): bool
    {
        return $typeSpecSymbol->typeSpecSymbol === $this->typeSpecSymbol;
    }

    public function __toString(): string
    {
        return (string) $this->typeSpecSymbol;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
