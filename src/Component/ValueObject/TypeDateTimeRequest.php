<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeDateTimeRequest implements ValueObjectInterface
{
    public function __construct(
        public ?string $typeDateTimeRequest,
    ) {
        if ($this->typeDateTimeRequest === null) {
            return;
        }
        if (!preg_match('/^[0-9]{4}-[01][0-9]-[0123][0-9]T[012][0-9]:[0-5][0-9]:[0-5][0-9](\+[0-9]{4})?$/', $this->typeDateTimeRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeDateTimeRequest', $this->typeDateTimeRequest));
        }
    }

    public function equals(self $typeDateTimeRequest): bool
    {
        return $typeDateTimeRequest->typeDateTimeRequest === $this->typeDateTimeRequest;
    }

    public function __toString(): string
    {
        return (string) $this->typeDateTimeRequest;
    }
}
