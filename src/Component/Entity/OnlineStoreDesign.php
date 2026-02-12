<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\OnlineStoreDesign\Header;

class OnlineStoreDesign extends Entity
{
    protected Header $header;

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function setHeader(Header $header): static
    {
        $this->header = $header;
        return $this;
    }
}
