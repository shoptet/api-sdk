<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderShippingRequest\UpdateOrderShippingRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;

class Data extends Entity
{
    protected ?TypeGuid $guid;
    protected ?string $vatRate;
    protected ?string $itemPriceWithVat;
    protected ?string $itemPriceWithoutVat;
    protected ?string $additionalField;
    protected ?float $statusId;

    public function getGuid(): ?TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(?TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getVatRate(): ?string
    {
        return $this->vatRate;
    }

    public function setVatRate(?string $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getItemPriceWithVat(): ?string
    {
        return $this->itemPriceWithVat;
    }

    public function setItemPriceWithVat(?string $itemPriceWithVat): static
    {
        $this->itemPriceWithVat = $itemPriceWithVat;
        return $this;
    }

    public function getItemPriceWithoutVat(): ?string
    {
        return $this->itemPriceWithoutVat;
    }

    public function setItemPriceWithoutVat(?string $itemPriceWithoutVat): static
    {
        $this->itemPriceWithoutVat = $itemPriceWithoutVat;
        return $this;
    }

    public function getAdditionalField(): ?string
    {
        return $this->additionalField;
    }

    public function setAdditionalField(?string $additionalField): static
    {
        $this->additionalField = $additionalField;
        return $this;
    }

    public function getStatusId(): ?float
    {
        return $this->statusId;
    }

    public function setStatusId(?float $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }
}
