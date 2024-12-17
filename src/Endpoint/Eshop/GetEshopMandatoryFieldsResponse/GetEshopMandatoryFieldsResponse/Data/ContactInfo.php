<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCustomerFieldValue;

class ContactInfo extends Entity
{
    protected TypeCustomerFieldValue $phone;
    protected TypeCustomerFieldValue $email;
    protected TypeCustomerFieldValue $birthday;

    public function getPhone(): TypeCustomerFieldValue
    {
        return $this->phone;
    }

    public function setPhone(TypeCustomerFieldValue $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getEmail(): TypeCustomerFieldValue
    {
        return $this->email;
    }

    public function setEmail(TypeCustomerFieldValue $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getBirthday(): TypeCustomerFieldValue
    {
        return $this->birthday;
    }

    public function setBirthday(TypeCustomerFieldValue $birthday): static
    {
        $this->birthday = $birthday;
        return $this;
    }
}
