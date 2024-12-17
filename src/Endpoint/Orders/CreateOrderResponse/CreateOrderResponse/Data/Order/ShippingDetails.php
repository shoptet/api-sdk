<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderResponse\CreateOrderResponse\Data\Order;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ShippingDetails extends Entity
{
    protected ?string $branchId;
    protected ?string $shippingCompanyCode;
    protected ?string $shippingServiceCode;
    protected ?string $name;
    protected ?string $note;
    protected ?string $place;
    protected ?string $street;
    protected ?string $city;
    protected ?string $zipCode;
    protected ?string $countryCode;
    protected ?string $link;
    protected ?string $latitude;
    protected ?string $longitude;
    protected ?int $carrierId;

    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    public function setBranchId(?string $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function getShippingCompanyCode(): ?string
    {
        return $this->shippingCompanyCode;
    }

    public function setShippingCompanyCode(?string $shippingCompanyCode): static
    {
        $this->shippingCompanyCode = $shippingCompanyCode;
        return $this;
    }

    public function getShippingServiceCode(): ?string
    {
        return $this->shippingServiceCode;
    }

    public function setShippingServiceCode(?string $shippingServiceCode): static
    {
        $this->shippingServiceCode = $shippingServiceCode;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
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

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(?string $place): static
    {
        $this->place = $place;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): static
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): static
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getCarrierId(): ?int
    {
        return $this->carrierId;
    }

    public function setCarrierId(?int $carrierId): static
    {
        $this->carrierId = $carrierId;
        return $this;
    }
}
