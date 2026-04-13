<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ActiveModules;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $title;
    protected string $name;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
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
