<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Product;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Warranty extends Entity
{
    protected int $id;
    protected ?int $inMonths;
    protected string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getInMonths(): ?int
    {
        return $this->inMonths;
    }

    public function setInMonths(?int $inMonths): static
    {
        $this->inMonths = $inMonths;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
