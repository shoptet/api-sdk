<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest\Data\Notes\AdditionalFields;

class Notes extends Entity
{
    protected ?string $customerRemark;
    protected ?string $eshopRemark;
    protected ?string $trackingNumber;
    protected ?AdditionalFields $additionalFields;

    public function getCustomerRemark(): ?string
    {
        return $this->customerRemark;
    }

    public function setCustomerRemark(?string $customerRemark): static
    {
        $this->customerRemark = $customerRemark;
        return $this;
    }

    public function getEshopRemark(): ?string
    {
        return $this->eshopRemark;
    }

    public function setEshopRemark(?string $eshopRemark): static
    {
        $this->eshopRemark = $eshopRemark;
        return $this;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): static
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getAdditionalFields(): ?AdditionalFields
    {
        return $this->additionalFields;
    }

    public function setAdditionalFields(?AdditionalFields $additionalFields): static
    {
        $this->additionalFields = $additionalFields;
        return $this;
    }
}
