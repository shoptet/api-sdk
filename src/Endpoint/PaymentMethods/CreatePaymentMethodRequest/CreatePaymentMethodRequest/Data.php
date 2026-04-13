<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodRequest\CreatePaymentMethodRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodRequest\CreatePaymentMethodRequest\Data\Logo;

class Data extends Entity
{
    protected string $name;
    protected ?string $description;
    protected ?string $submethod;
    protected string $paymentType;
    protected ?bool $visibility;
    protected ?bool $wholesale;
    protected ?Logo $logo;

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

    public function getSubmethod(): ?string
    {
        return $this->submethod;
    }

    public function setSubmethod(?string $submethod): static
    {
        $this->submethod = $submethod;
        return $this;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function setPaymentType(string $paymentType): static
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

    public function setVisibility(?bool $visibility): static
    {
        $this->visibility = $visibility;
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

    public function getLogo(): ?Logo
    {
        return $this->logo;
    }

    public function setLogo(?Logo $logo): static
    {
        $this->logo = $logo;
        return $this;
    }
}
