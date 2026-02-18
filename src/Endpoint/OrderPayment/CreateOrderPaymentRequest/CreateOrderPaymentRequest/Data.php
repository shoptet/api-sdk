<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\CreateOrderPaymentRequest\CreateOrderPaymentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeVatRate;

class Data extends Entity
{
    protected TypeGuid $guid;
    protected TypeVatRate $vatRate;

    /** @deprecated */
    protected ?string $itemPriceWithVat;

    /** @deprecated */
    protected ?string $itemPriceWithoutVat;
    protected ?string $unitPriceWithVat;
    protected ?string $unitPriceWithoutVat;
    protected ?string $buyPriceWithVat;
    protected ?string $additionalField;
    protected ?int $statusId;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getVatRate(): TypeVatRate
    {
        return $this->vatRate;
    }

    public function setVatRate(TypeVatRate $vatRate): static
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getItemPriceWithVat(): ?string
    {
        return $this->itemPriceWithVat;
    }

    /**
     * @deprecated
     */
    public function setItemPriceWithVat(?string $itemPriceWithVat): static
    {
        $this->itemPriceWithVat = $itemPriceWithVat;
        return $this;
    }

    /**
     * @deprecated
     */
    public function getItemPriceWithoutVat(): ?string
    {
        return $this->itemPriceWithoutVat;
    }

    /**
     * @deprecated
     */
    public function setItemPriceWithoutVat(?string $itemPriceWithoutVat): static
    {
        $this->itemPriceWithoutVat = $itemPriceWithoutVat;
        return $this;
    }

    public function getUnitPriceWithVat(): ?string
    {
        return $this->unitPriceWithVat;
    }

    public function setUnitPriceWithVat(?string $unitPriceWithVat): static
    {
        $this->unitPriceWithVat = $unitPriceWithVat;
        return $this;
    }

    public function getUnitPriceWithoutVat(): ?string
    {
        return $this->unitPriceWithoutVat;
    }

    public function setUnitPriceWithoutVat(?string $unitPriceWithoutVat): static
    {
        $this->unitPriceWithoutVat = $unitPriceWithoutVat;
        return $this;
    }

    public function getBuyPriceWithVat(): ?string
    {
        return $this->buyPriceWithVat;
    }

    public function setBuyPriceWithVat(?string $buyPriceWithVat): static
    {
        $this->buyPriceWithVat = $buyPriceWithVat;
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

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): static
    {
        $this->statusId = $statusId;
        return $this;
    }
}
