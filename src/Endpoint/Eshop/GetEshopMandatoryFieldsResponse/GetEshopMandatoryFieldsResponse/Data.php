<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data\BillingAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data\BillingInfo;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data\ContactInfo;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data\DeliveryAddress;

class Data extends Entity
{
    protected BillingAddress $billingAddress;
    protected DeliveryAddress $deliveryAddress;
    protected BillingInfo $billingInfo;
    protected ContactInfo $contactInfo;

    public function getBillingAddress(): BillingAddress
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(BillingAddress $billingAddress): static
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getDeliveryAddress(): DeliveryAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(DeliveryAddress $deliveryAddress): static
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getBillingInfo(): BillingInfo
    {
        return $this->billingInfo;
    }

    public function setBillingInfo(BillingInfo $billingInfo): static
    {
        $this->billingInfo = $billingInfo;
        return $this;
    }

    public function getContactInfo(): ContactInfo
    {
        return $this->contactInfo;
    }

    public function setContactInfo(ContactInfo $contactInfo): static
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}
