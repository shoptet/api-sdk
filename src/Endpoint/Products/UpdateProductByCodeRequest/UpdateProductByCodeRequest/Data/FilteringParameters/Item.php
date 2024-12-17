<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\FilteringParameters;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\FilteringParameters\Item\Values;

class Item extends Entity
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
