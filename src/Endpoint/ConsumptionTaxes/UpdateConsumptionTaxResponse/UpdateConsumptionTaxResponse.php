<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\UpdateConsumptionTaxResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\ConsumptionTax;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;

class UpdateConsumptionTaxResponse extends Entity
{
    protected ?ConsumptionTax $data;
    protected ?Errors $errors;

    public function getData(): ?ConsumptionTax
    {
        return $this->data;
    }

    public function setData(?ConsumptionTax $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function setErrors(?Errors $errors): static
    {
        $this->errors = $errors;
        return $this;
    }
}
