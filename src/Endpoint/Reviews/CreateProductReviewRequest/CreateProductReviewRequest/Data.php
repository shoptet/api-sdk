<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReviewRequest\CreateProductReviewRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReviewRequest\CreateProductReviewRequest\Data\Reaction;

class Data extends Entity
{
    protected ?TypeGuidUnlimited $productGuid;
    protected ?TypeDateTimeNullable $date;
    protected ?string $fullName;
    protected ?string $email;
    protected ?string $description;
    protected int $rating;
    protected ?string $customerGuid;
    protected ?string $orderCode;
    protected ?string $ipAddress;
    protected ?Reaction $reaction;

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getDate(): ?TypeDateTimeNullable
    {
        return $this->date;
    }

    public function setDate(?TypeDateTimeNullable $date): static
    {
        $this->date = $date;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
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

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): static
    {
        $this->rating = $rating;
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

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getReaction(): ?Reaction
    {
        return $this->reaction;
    }

    public function setReaction(?Reaction $reaction): static
    {
        $this->reaction = $reaction;
        return $this;
    }
}
