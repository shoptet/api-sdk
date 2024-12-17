<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest\CreateCustomerRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\BillingAddressCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest\CreateCustomerRequest\Data\Account;

class Data extends Entity
{
    protected ?string $remark;
    protected ?TypePriceRatio $priceRatio;
    protected ?string $birthDate;
    protected ?bool $disabledOrders;
    protected ?string $customerGroupCode;
    protected ?int $pricelistId;
    protected ?BillingAddressCustomer $billingAddress;
    protected Account $account;

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getPriceRatio(): ?TypePriceRatio
    {
        return $this->priceRatio;
    }

    public function setPriceRatio(?TypePriceRatio $priceRatio): static
    {
        $this->priceRatio = $priceRatio;
        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): static
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getDisabledOrders(): ?bool
    {
        return $this->disabledOrders;
    }

    public function setDisabledOrders(?bool $disabledOrders): static
    {
        $this->disabledOrders = $disabledOrders;
        return $this;
    }

    public function getCustomerGroupCode(): ?string
    {
        return $this->customerGroupCode;
    }

    public function setCustomerGroupCode(?string $customerGroupCode): static
    {
        $this->customerGroupCode = $customerGroupCode;
        return $this;
    }

    public function getPricelistId(): ?int
    {
        return $this->pricelistId;
    }

    public function setPricelistId(?int $pricelistId): static
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }

    public function getBillingAddress(): ?BillingAddressCustomer
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?BillingAddressCustomer $billingAddress): static
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): static
    {
        $this->account = $account;
        return $this;
    }
}
