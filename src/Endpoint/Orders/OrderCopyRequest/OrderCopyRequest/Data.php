<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest\OrderCopyRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $scope;

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setScope(string $scope): static
    {
        $this->scope = $scope;
        return $this;
    }
}
