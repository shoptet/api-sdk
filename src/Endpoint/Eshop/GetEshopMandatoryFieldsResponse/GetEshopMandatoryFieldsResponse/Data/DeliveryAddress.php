<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCustomerFieldValue;

class DeliveryAddress extends Entity
{
    protected TypeCustomerFieldValue $company;
    protected TypeCustomerFieldValue $fullName;
    protected TypeCustomerFieldValue $street;
    protected TypeCustomerFieldValue $houseNumber;
    protected TypeCustomerFieldValue $city;
    protected TypeCustomerFieldValue $district;
    protected TypeCustomerFieldValue $zip;
    protected TypeCustomerFieldValue $countryCode;

    public function getCompany(): TypeCustomerFieldValue
    {
        return $this->company;
    }

    public function setCompany(TypeCustomerFieldValue $company): static
    {
        $this->company = $company;
        return $this;
    }

    public function getFullName(): TypeCustomerFieldValue
    {
        return $this->fullName;
    }

    public function setFullName(TypeCustomerFieldValue $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getStreet(): TypeCustomerFieldValue
    {
        return $this->street;
    }

    public function setStreet(TypeCustomerFieldValue $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function getHouseNumber(): TypeCustomerFieldValue
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(TypeCustomerFieldValue $houseNumber): static
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getCity(): TypeCustomerFieldValue
    {
        return $this->city;
    }

    public function setCity(TypeCustomerFieldValue $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getDistrict(): TypeCustomerFieldValue
    {
        return $this->district;
    }

    public function setDistrict(TypeCustomerFieldValue $district): static
    {
        $this->district = $district;
        return $this;
    }

    public function getZip(): TypeCustomerFieldValue
    {
        return $this->zip;
    }

    public function setZip(TypeCustomerFieldValue $zip): static
    {
        $this->zip = $zip;
        return $this;
    }

    public function getCountryCode(): TypeCustomerFieldValue
    {
        return $this->countryCode;
    }

    public function setCountryCode(TypeCustomerFieldValue $countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
