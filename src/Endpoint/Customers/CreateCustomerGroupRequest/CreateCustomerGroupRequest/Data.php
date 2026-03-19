<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerGroupRequest\CreateCustomerGroupRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected string $name;
    protected ?string $description;
    protected ?int $defaultPricelistId;
    protected ?bool $emailNotification;
    protected ?bool $authRequired;
    protected ?string $maxDiscount;
    protected ?int $defaultDueDays;
    protected ?bool $registrationAllowed;
    protected ?bool $wholesale;
    protected ?bool $tableLayout;
    protected ?bool $fullProfileRequired;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getEmailNotification(): ?bool
    {
        return $this->emailNotification;
    }

    public function setEmailNotification(?bool $emailNotification): static
    {
        $this->emailNotification = $emailNotification;
        return $this;
    }

    public function getAuthRequired(): ?bool
    {
        return $this->authRequired;
    }

    public function setAuthRequired(?bool $authRequired): static
    {
        $this->authRequired = $authRequired;
        return $this;
    }

    public function getMaxDiscount(): ?string
    {
        return $this->maxDiscount;
    }

    public function setMaxDiscount(?string $maxDiscount): static
    {
        $this->maxDiscount = $maxDiscount;
        return $this;
    }

    public function getDefaultDueDays(): ?int
    {
        return $this->defaultDueDays;
    }

    public function setDefaultDueDays(?int $defaultDueDays): static
    {
        $this->defaultDueDays = $defaultDueDays;
        return $this;
    }

    public function getRegistrationAllowed(): ?bool
    {
        return $this->registrationAllowed;
    }

    public function setRegistrationAllowed(?bool $registrationAllowed): static
    {
        $this->registrationAllowed = $registrationAllowed;
        return $this;
    }

    public function getWholesale(): ?bool
    {
        return $this->wholesale;
    }

    public function setWholesale(?bool $wholesale): static
    {
        $this->wholesale = $wholesale;
        return $this;
    }

    public function getTableLayout(): ?bool
    {
        return $this->tableLayout;
    }

    public function setTableLayout(?bool $tableLayout): static
    {
        $this->tableLayout = $tableLayout;
        return $this;
    }

    public function getFullProfileRequired(): ?bool
    {
        return $this->fullProfileRequired;
    }

    public function setFullProfileRequired(?bool $fullProfileRequired): static
    {
        $this->fullProfileRequired = $fullProfileRequired;
        return $this;
    }
}
