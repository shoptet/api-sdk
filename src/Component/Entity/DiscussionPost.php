<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class DiscussionPost extends Entity
{
    protected float $id;
    protected ?float $parentId;
    protected ?string $productGuid;
    protected ?string $customerGuid;
    protected ?string $name;
    protected ?string $email;
    protected ?string $title;
    protected ?string $content;
    protected ?TypeDateTime $creationDate;
    protected bool $authorized;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getParentId(): ?float
    {
        return $this->parentId;
    }

    public function setParentId(?float $parentId): static
    {
        $this->parentId = $parentId;
        return $this;
    }

    public function getProductGuid(): ?string
    {
        return $this->productGuid;
    }

    public function setProductGuid(?string $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getCustomerGuid(): ?string
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?string $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getCreationDate(): ?TypeDateTime
    {
        return $this->creationDate;
    }

    public function setCreationDate(?TypeDateTime $creationDate): static
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function isAuthorized(): bool
    {
        return $this->authorized;
    }

    public function setAuthorized(bool $authorized): static
    {
        $this->authorized = $authorized;
        return $this;
    }
}
