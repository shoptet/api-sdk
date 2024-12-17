<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeWeightRequest implements ValueObjectInterface
{
    public function __construct(
        public string $typeWeightRequest,
    ) {
        if (!preg_match('/^[0-9]{1,5}\.[0-9]{3}$/', $this->typeWeightRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeWeightRequest', $this->typeWeightRequest));
        }
    }

    public function equals(self $typeWeightRequest): bool
    {
        return $typeWeightRequest->typeWeightRequest === $this->typeWeightRequest;
    }

    public function __toString(): string
    {
        return $this->typeWeightRequest;
    }
}
