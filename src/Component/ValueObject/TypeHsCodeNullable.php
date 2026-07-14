<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeHsCodeNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeHsCodeNullable,
    ) {
        if ($this->typeHsCodeNullable === null) {
            return;
        }
        if (!preg_match('/^\d{6,10}$/', $this->typeHsCodeNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeHsCodeNullable', $this->typeHsCodeNullable));
        }
    }

    public function equals(self $typeHsCodeNullable): bool
    {
        return $typeHsCodeNullable->typeHsCodeNullable === $this->typeHsCodeNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeHsCodeNullable;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
