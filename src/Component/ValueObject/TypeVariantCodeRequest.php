<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeVariantCodeRequest implements ValueObjectInterface
{
    public function __construct(
        public string $typeVariantCodeRequest,
    ) {
        if (!preg_match('/^[a-zA-Z0-9_\/ \-\.]+$/', $this->typeVariantCodeRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid %s "%s".', 'typeVariantCodeRequest', $this->typeVariantCodeRequest));
        }
        if (mb_strlen($this->typeVariantCodeRequest) < '1') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too short. %s should be at least %s characters long', 'typeVariantCodeRequest', $this->typeVariantCodeRequest, '1', 'typeVariantCodeRequest'));
        }
        if (mb_strlen($this->typeVariantCodeRequest) > '64') {
            throw new InvalidArgumentException(sprintf('%s "%s" is too long. %s should be less than %s characters long', 'typeVariantCodeRequest', $this->typeVariantCodeRequest, '64', 'typeVariantCodeRequest'));
        }
    }

    public function equals(self $typeVariantCodeRequest): bool
    {
        return $typeVariantCodeRequest->typeVariantCodeRequest === $this->typeVariantCodeRequest;
    }

    public function __toString(): string
    {
        return (string) $this->typeVariantCodeRequest;
    }
}
