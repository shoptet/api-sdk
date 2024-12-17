<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeGuid implements ValueObjectInterface
{
    public function __construct(
        public string $typeGuid,
    ) {
        if (!preg_match('/^[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/', $this->typeGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeGuid', $this->typeGuid));
        }
        if (mb_strlen($this->typeGuid) > '36') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeGuid', $this->typeGuid, '36', 'typeGuid'));
        }
    }

    public function equals(self $typeGuid): bool
    {
        return $typeGuid->typeGuid === $this->typeGuid;
    }

    public function __toString(): string
    {
        return $this->typeGuid;
    }
}
