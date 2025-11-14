<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDateNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeDateNullable,
    ) {
        if ($this->typeDateNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $this->typeDateNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDateNullable', $this->typeDateNullable));
        }
    }

    public function equals(self $typeDateNullable): bool
    {
        return $typeDateNullable->typeDateNullable === $this->typeDateNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeDateNullable;
    }
}
