<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class ProductBatchDelete extends Entity
{
    protected ?TypeGuid $guid;
    protected ?string $code;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }
}
