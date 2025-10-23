<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethodsResponse\GetListingOfPaymentMethodsResponse\Data\PaymentMethods\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class PaymentType extends Entity
{
    protected int $id;
    protected string $code;
    protected string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }
}
