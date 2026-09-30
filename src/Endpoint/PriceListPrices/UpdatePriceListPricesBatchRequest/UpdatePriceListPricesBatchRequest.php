<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PriceListPrices\UpdatePriceListPricesBatchRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class UpdatePriceListPricesBatchRequest extends Entity
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
