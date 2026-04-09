<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class Metadata extends Entity
{
    protected string $requestId;

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): static
    {
        $this->requestId = $requestId;
        return $this;
    }
}
