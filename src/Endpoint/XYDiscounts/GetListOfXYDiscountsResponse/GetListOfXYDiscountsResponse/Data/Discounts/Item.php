<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscountsResponse\GetListOfXYDiscountsResponse\Data\Discounts;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscountsResponse\GetListOfXYDiscountsResponse\Data\Discounts\Item\CustomerGroups;

class Item extends Entity
{
    protected int $id;
    protected string $title;
    protected TypeDate $validFrom;
    protected TypeDate $validTo;
    protected ?CustomerGroups $customerGroups;
    protected bool $includeUnregisteredCustomers;
    protected ?int $priority;
    protected ?int $usageCount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getValidFrom(): TypeDate
    {
        return $this->validFrom;
    }

    public function setValidFrom(TypeDate $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidTo(): TypeDate
    {
        return $this->validTo;
    }

    public function setValidTo(TypeDate $validTo): static
    {
        $this->validTo = $validTo;
        return $this;
    }

    public function getCustomerGroups(): ?CustomerGroups
    {
        return $this->customerGroups;
    }

    public function setCustomerGroups(?CustomerGroups $customerGroups): static
    {
        $this->customerGroups = $customerGroups;
        return $this;
    }

    public function isIncludeUnregisteredCustomers(): bool
    {
        return $this->includeUnregisteredCustomers;
    }

    public function setIncludeUnregisteredCustomers(bool $includeUnregisteredCustomers): static
    {
        $this->includeUnregisteredCustomers = $includeUnregisteredCustomers;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): static
    {
        $this->priority = $priority;
        return $this;
    }

    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    public function setUsageCount(?int $usageCount): static
    {
        $this->usageCount = $usageCount;
        return $this;
    }
}
