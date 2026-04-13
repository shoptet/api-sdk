<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Template extends Entity
{
    protected string $name;
    protected string $colorVariant;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getColorVariant(): string
    {
        return $this->colorVariant;
    }

    public function setColorVariant(string $colorVariant): static
    {
        $this->colorVariant = $colorVariant;
        return $this;
    }
}
