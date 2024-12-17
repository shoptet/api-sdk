<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDateTime implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeDateTime,
    ) {
        if ($this->typeDateTime === null) {
            return;
        }
        if (!preg_match('/^[0-9]{4}-[01][0-9]-[0123][0-9]T[012][0-9]:[0-5][0-9]:[0-5][0-9]\+[0-9]{4}$/', $this->typeDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDateTime', $this->typeDateTime));
        }
    }

    public function equals(self $typeDateTime): bool
    {
        return $typeDateTime->typeDateTime === $this->typeDateTime;
    }

    public function __toString(): string
    {
        return $this->typeDateTime ?? '';
    }
}
