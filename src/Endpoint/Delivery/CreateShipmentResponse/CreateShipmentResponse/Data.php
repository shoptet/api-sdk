<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentResponse\CreateShipmentResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentResponse\CreateShipmentResponse\Data\CheckUrls;

class Data extends Entity
{
    protected ?string $guid;
    protected ?CheckUrls $checkUrls;

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getCheckUrls(): ?CheckUrls
    {
        return $this->checkUrls;
    }

    public function setCheckUrls(?CheckUrls $checkUrls): static
    {
        $this->checkUrls = $checkUrls;
        return $this;
    }
}
