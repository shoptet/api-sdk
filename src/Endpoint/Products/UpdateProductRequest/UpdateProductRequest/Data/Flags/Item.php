<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductRequest\UpdateProductRequest\Data\Flags;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;

class Item extends Entity
{
    protected string $code;
    protected ?TypeDate $dateFrom;
    protected ?TypeDate $dateTo;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getDateFrom(): ?TypeDate
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?TypeDate $dateFrom): static
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function getDateTo(): ?TypeDate
    {
        return $this->dateTo;
    }

    public function setDateTo(?TypeDate $dateTo): static
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
