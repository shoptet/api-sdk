<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertionRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class OrderBatchInsertionRequest extends Entity
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
