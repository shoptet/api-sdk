<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDateTimeNullable implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeDateTimeNullable,
    ) {
        if ($this->typeDateTimeNullable === null) {
            return;
        }
        if (!preg_match('/^[0-9]{4}-[01][0-9]-[0123][0-9]T[012][0-9]:[0-5][0-9]:[0-5][0-9]\+[0-9]{4}$/', $this->typeDateTimeNullable)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDateTimeNullable', $this->typeDateTimeNullable));
        }
    }

    public function equals(self $typeDateTimeNullable): bool
    {
        return $typeDateTimeNullable->typeDateTimeNullable === $this->typeDateTimeNullable;
    }

    public function __toString(): string
    {
        return (string) $this->typeDateTimeNullable;
    }
}
