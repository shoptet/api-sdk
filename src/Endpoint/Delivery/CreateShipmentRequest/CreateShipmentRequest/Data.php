<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceNullable;
use Shoptet\Api\Sdk\Php\Endpoint\Delivery\CreateShipmentRequest\CreateShipmentRequest\Data\Packages;

class Data extends Entity
{
    protected string $orderCode;
    protected ?string $note;
    protected ?TypePriceNullable $cod;
    protected ?int $shippingId;
    protected ?int $addressId;
    protected ?int $bankAccountId;
    protected ?Packages $packages;

    public function getOrderCode(): string
    {
        return $this->orderCode;
    }

    public function setOrderCode(string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getCod(): ?TypePriceNullable
    {
        return $this->cod;
    }

    public function setCod(?TypePriceNullable $cod): static
    {
        $this->cod = $cod;
        return $this;
    }

    public function getShippingId(): ?int
    {
        return $this->shippingId;
    }

    public function setShippingId(?int $shippingId): static
    {
        $this->shippingId = $shippingId;
        return $this;
    }

    public function getAddressId(): ?int
    {
        return $this->addressId;
    }

    public function setAddressId(?int $addressId): static
    {
        $this->addressId = $addressId;
        return $this;
    }

    public function getBankAccountId(): ?int
    {
        return $this->bankAccountId;
    }

    public function setBankAccountId(?int $bankAccountId): static
    {
        $this->bankAccountId = $bankAccountId;
        return $this;
    }

    public function getPackages(): ?Packages
    {
        return $this->packages;
    }

    public function setPackages(?Packages $packages): static
    {
        $this->packages = $packages;
        return $this;
    }
}
