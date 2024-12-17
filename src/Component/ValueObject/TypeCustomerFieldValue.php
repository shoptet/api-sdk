<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

readonly class TypeCustomerFieldValue implements ValueObjectInterface
{
    public function __construct(
        public string $typeCustomerFieldValue,
    ) {
        $enum = ['required', 'optional', 'hidden'];
        if (!in_array($this->typeCustomerFieldValue, $enum)) {
            throw new InvalidArgumentException(sprintf('Unsupported %s "%s". Supported %s: "%s".', 'typeCustomerFieldValue', $this->typeCustomerFieldValue, 'typeCustomerFieldValue', implode(', ', $enum)));
        }
    }

    public function equals(self $typeCustomerFieldValue): bool
    {
        return $typeCustomerFieldValue->typeCustomerFieldValue === $this->typeCustomerFieldValue;
    }

    public function __toString(): string
    {
        return $this->typeCustomerFieldValue;
    }
}
