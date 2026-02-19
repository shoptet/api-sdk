<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateCategoryProductsPriorityBatchRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class UpdateCategoryProductsPriorityBatchRequest extends Entity
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
