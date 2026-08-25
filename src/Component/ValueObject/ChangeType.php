<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class ChangeType implements ValueObjectInterface
{
    public function __construct(
        public string $changeType,
    ) {
    }

    public function equals(self $changeType): bool
    {
        return $changeType->changeType === $this->changeType;
    }

    public function __toString(): string
    {
        return (string) $this->changeType;
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
