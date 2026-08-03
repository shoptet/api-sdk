<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\ProductImageBatchDeleteRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ProductImageBatchDeleteRequest extends Entity
{
    protected string $batchFileUrlPath;
    protected ?bool $removeReference;

    public function getBatchFileUrlPath(): string
    {
        return $this->batchFileUrlPath;
    }

    public function setBatchFileUrlPath(string $batchFileUrlPath): static
    {
        $this->batchFileUrlPath = $batchFileUrlPath;
        return $this;
    }

    public function getRemoveReference(): ?bool
    {
        return $this->removeReference;
    }

    public function setRemoveReference(?bool $removeReference): static
    {
        $this->removeReference = $removeReference;
        return $this;
    }
}
