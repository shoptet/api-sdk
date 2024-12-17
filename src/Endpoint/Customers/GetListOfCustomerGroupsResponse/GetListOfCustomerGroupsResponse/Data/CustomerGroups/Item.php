<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroupsResponse\GetListOfCustomerGroupsResponse\Data\CustomerGroups;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypePriceRatio;

class Item extends Entity
{
    protected int $id;
    protected string $name;
    protected ?string $customerGroupCode;
    protected ?string $description;
    protected ?int $defaultPricelistId;
    protected ?TypePriceRatio $maxDiscount;
    protected ?int $priority;
    protected bool $emailNotification;
    protected bool $authRequired;
    protected bool $registrationAllowed;
    protected bool $wholesale;
    protected bool $tableLayout;
    protected bool $fullProfileRequired;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDefaultPricelistId(): ?int
    {
        return $this->defaultPricelistId;
    }

    public function setDefaultPricelistId(?int $defaultPricelistId): static
    {
        $this->defaultPricelistId = $defaultPricelistId;
        return $this;
    }

    public function getMaxDiscount(): ?TypePriceRatio
    {
        return $this->maxDiscount;
    }

    public function setMaxDiscount(?TypePriceRatio $maxDiscount): static
    {
        $this->maxDiscount = $maxDiscount;
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

    public function isEmailNotification(): bool
    {
        return $this->emailNotification;
    }

    public function setEmailNotification(bool $emailNotification): static
    {
        $this->emailNotification = $emailNotification;
        return $this;
    }

    public function isAuthRequired(): bool
    {
        return $this->authRequired;
    }

    public function setAuthRequired(bool $authRequired): static
    {
        $this->authRequired = $authRequired;
        return $this;
    }

    public function isRegistrationAllowed(): bool
    {
        return $this->registrationAllowed;
    }

    public function setRegistrationAllowed(bool $registrationAllowed): static
    {
        $this->registrationAllowed = $registrationAllowed;
        return $this;
    }

    public function isWholesale(): bool
    {
        return $this->wholesale;
    }

    public function setWholesale(bool $wholesale): static
    {
        $this->wholesale = $wholesale;
        return $this;
    }

    public function isTableLayout(): bool
    {
        return $this->tableLayout;
    }

    public function setTableLayout(bool $tableLayout): static
    {
        $this->tableLayout = $tableLayout;
        return $this;
    }

    public function isFullProfileRequired(): bool
    {
        return $this->fullProfileRequired;
    }

    public function setFullProfileRequired(bool $fullProfileRequired): static
    {
        $this->fullProfileRequired = $fullProfileRequired;
        return $this;
    }
}
