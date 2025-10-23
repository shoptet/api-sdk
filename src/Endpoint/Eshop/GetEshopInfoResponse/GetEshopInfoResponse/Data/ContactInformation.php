<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class ContactInformation extends Entity
{
    protected int $eshopId;
    protected string $eshopName;
    protected ?string $eshopCategory;
    protected string $url;
    protected string $eshopTitle;
    protected ?string $eshopSubtitle;
    protected ?string $contactPerson;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $mobilePhone;
    protected ?string $skypeAccount;
    protected ?string $contactPhotoUrl;

    public function getEshopId(): int
    {
        return $this->eshopId;
    }

    public function setEshopId(int $eshopId): static
    {
        $this->eshopId = $eshopId;
        return $this;
    }

    public function getEshopName(): string
    {
        return $this->eshopName;
    }

    public function setEshopName(string $eshopName): static
    {
        $this->eshopName = $eshopName;
        return $this;
    }

    public function getEshopCategory(): ?string
    {
        return $this->eshopCategory;
    }

    public function setEshopCategory(?string $eshopCategory): static
    {
        $this->eshopCategory = $eshopCategory;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getEshopTitle(): string
    {
        return $this->eshopTitle;
    }

    public function setEshopTitle(string $eshopTitle): static
    {
        $this->eshopTitle = $eshopTitle;
        return $this;
    }

    public function getEshopSubtitle(): ?string
    {
        return $this->eshopSubtitle;
    }

    public function setEshopSubtitle(?string $eshopSubtitle): static
    {
        $this->eshopSubtitle = $eshopSubtitle;
        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): static
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): static
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    public function getSkypeAccount(): ?string
    {
        return $this->skypeAccount;
    }

    public function setSkypeAccount(?string $skypeAccount): static
    {
        $this->skypeAccount = $skypeAccount;
        return $this;
    }

    public function getContactPhotoUrl(): ?string
    {
        return $this->contactPhotoUrl;
    }

    public function setContactPhotoUrl(?string $contactPhotoUrl): static
    {
        $this->contactPhotoUrl = $contactPhotoUrl;
        return $this;
    }
}
