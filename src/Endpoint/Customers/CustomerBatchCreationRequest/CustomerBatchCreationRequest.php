<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CustomerBatchCreationRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class CustomerBatchCreationRequest extends Entity
{
    protected string $batchFileUrlPath;

    public function getBatchFileUrlPath(): string
    {
        return $this->batchFileUrlPath;
    }

    public function setBatchFileUrlPath(string $batchFileUrlPath): static
    {
        $this->batchFileUrlPath = $batchFileUrlPath;
        return $this;
    }
}
