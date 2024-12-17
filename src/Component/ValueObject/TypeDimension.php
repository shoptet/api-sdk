<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDimension implements ValueObjectInterface
{
    public function __construct(
        public string $typeDimension,
    ) {
        if (!preg_match('/^[0-9]{1,4}\.[0-9]{1}$/', $this->typeDimension)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDimension', $this->typeDimension));
        }
    }

    public function equals(self $typeDimension): bool
    {
        return $typeDimension->typeDimension === $this->typeDimension;
    }

    public function __toString(): string
    {
        return $this->typeDimension;
    }
}
