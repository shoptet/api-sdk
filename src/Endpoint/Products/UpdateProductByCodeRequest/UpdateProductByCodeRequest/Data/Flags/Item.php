<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest\Data\Flags;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateNullable;

class Item extends Entity
{
    protected string $code;
    protected ?TypeDateNullable $dateFrom;
    protected ?TypeDateNullable $dateTo;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getDateFrom(): ?TypeDateNullable
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?TypeDateNullable $dateFrom): static
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    public function getDateTo(): ?TypeDateNullable
    {
        return $this->dateTo;
    }

    public function setDateTo(?TypeDateNullable $dateTo): static
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
