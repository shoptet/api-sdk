<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse\Data\MeasureUnits;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnitsResponse\GetListOfProductsMeasureUnitsResponse\Data\MeasureUnits\Item\Ratios;

class Item extends Entity
{
    protected int $id;
    protected string $unitName;
    protected ?int $priority;
    protected Ratios $ratios;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getUnitName(): string
    {
        return $this->unitName;
    }

    public function setUnitName(string $unitName): static
    {
        $this->unitName = $unitName;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getRatios(): Ratios
    {
        return $this->ratios;
    }

    public function setRatios(Ratios $ratios): static
    {
        $this->ratios = $ratios;
        return $this;
    }
}
