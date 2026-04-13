<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\ProductRequestSurchargeParameter\Values;

class ProductRequestSurchargeParameter extends Entity
{
    protected string $code;
    protected Values $values;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getValues(): Values
    {
        return $this->values;
    }

    public function setValues(Values $values): static
    {
        $this->values = $values;
        return $this;
    }
}
