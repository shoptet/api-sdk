<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\PaymentMethod;
use Shoptet\Api\Sdk\Php\Component\Entity\Price;
use Shoptet\Api\Sdk\Php\Component\Entity\Shipping;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders\Item\Source;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrdersResponse\GetListOfOrdersResponse\Data\Orders\Item\Status;

class Item extends Entity
{
    protected string $code;
    protected string $guid;
    protected TypeDateTime $creationTime;
    protected ?TypeDateTime $changeTime;
    protected ?string $fullName;
    protected ?string $company;
    protected ?string $email;
    protected ?string $phone;
    protected ?string $remark;
    protected ?TypeGuidUnlimited $customerGuid;
    protected bool $cashDeskOrder;
    protected string $adminUrl;
    protected ?Status $status;
    protected ?Source $source;
    protected ?Shipping $shipping;
    protected ?PaymentMethod $paymentMethod;
    protected Price $price;
    protected ?bool $paid;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): static
    {
        $this->guid = $guid;
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

    public function getChangeTime(): ?TypeDateTime
    {
        return $this->changeTime;
    }

    public function setChangeTime(?TypeDateTime $changeTime): static
    {
        $this->changeTime = $changeTime;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): static
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): static
    {
        $this->company = $company;
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

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;
        return $this;
    }

    public function getCustomerGuid(): ?TypeGuidUnlimited
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuidUnlimited $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function isCashDeskOrder(): bool
    {
        return $this->cashDeskOrder;
    }

    public function setCashDeskOrder(bool $cashDeskOrder): static
    {
        $this->cashDeskOrder = $cashDeskOrder;
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

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function setSource(?Source $source): static
    {
        $this->source = $source;
        return $this;
    }

    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    public function setShipping(?Shipping $shipping): static
    {
        $this->shipping = $shipping;
        return $this;
    }

    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethod $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(?bool $paid): static
    {
        $this->paid = $paid;
        return $this;
    }
}
