<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

readonly class ConsumptionTaxId implements ValueObjectInterface
{
    public function __construct(
        public ?int $consumptionTaxId,
    ) {
        if ($this->consumptionTaxId === null) {
            return;
        }
    }

    public function equals(self $consumptionTaxId): bool
    {
        return $consumptionTaxId->consumptionTaxId === $this->consumptionTaxId;
    }

    public function __toString(): string
    {
        return (string) $this->consumptionTaxId;
    }
}
