<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\BillingAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Pricelist;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data\Customer\Accounts;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data\Customer\CustomerGroup;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data\Customer\DeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerResponse\UpdateCustomerResponse\Data\Customer\Remarks;

class Customer extends Entity
{
    protected TypeGuidUnlimited $guid;
    protected BillingAddress $billingAddress;
    protected DeliveryAddress $deliveryAddress;
    protected TypeDateTime $creationTime;
    protected TypeDateTime $changeTime;
    protected ?CustomerGroup $customerGroup;
    protected ?Pricelist $priceList;
    protected ?string $remark;
    protected TypePriceRatio $priceRatio;
    protected ?TypeDate $birthDate;
    protected Accounts $accounts;
    protected bool $disabledOrders;
    protected Remarks $remarks;
    protected string $adminUrl;

    public function getGuid(): TypeGuidUnlimited
    {
        return $this->guid;
    }

    public function setGuid(TypeGuidUnlimited $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

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

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getChangeTime(): TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getCustomerGroup(): ?CustomerGroup
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroup $customerGroup): static
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }

    public function getPriceList(): ?Pricelist
    {
        return $this->priceList;
    }

    public function setPriceList(?Pricelist $priceList): static
    {
        $this->priceList = $priceList;
        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getPriceRatio(): TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getBirthDate(): ?TypeDate
    {
        return $this->birthDate;
    }

    public function setBirthDate(?TypeDate $birthDate): static
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getAccounts(): Accounts
    {
        return $this->accounts;
    }

    public function setAccounts(Accounts $accounts): static
    {
        $this->accounts = $accounts;
        return $this;
    }

    public function isDisabledOrders(): bool
    {
        return $this->disabledOrders;
    }

    public function setDisabledOrders(bool $disabledOrders): static
    {
        $this->disabledOrders = $disabledOrders;
        return $this;
    }

    public function getRemarks(): Remarks
    {
        return $this->remarks;
    }

    public function setRemarks(Remarks $remarks): static
    {
        $this->remarks = $remarks;
        return $this;
    }

    public function getAdminUrl(): string
    {
        return $this->adminUrl;
    }

    public function setAdminUrl(string $adminUrl): static
    {
        $this->adminUrl = $adminUrl;
        return $this;
    }
}
