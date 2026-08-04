<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetListOfProductImagesResponse\GetListOfProductImagesResponse\Data\Images\Item\SignedCdnNames;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $type;
    protected string $name;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
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
