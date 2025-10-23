<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsResponse\GetListOfEshopReviewsResponse\Data\Reviews;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsResponse\GetListOfEshopReviewsResponse\Data\Reviews\Item\Reaction;

class Item extends Entity
{
    protected TypeDateTimeNullable $date;
    protected ?string $orderCode;
    protected float $rating;
    protected ?string $description;
    protected ?string $fullName;
    protected ?string $email;
    protected ?string $customerGuid;
    protected bool $visible;
    protected Reaction $reaction;

    public function getDate(): TypeDateTimeNullable
    {
        return $this->date;
    }

    public function setDate(TypeDateTimeNullable $date): static
    {
        $this->date = $date;
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

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): static
    {
        $this->rating = $rating;
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

    public function getCustomerGuid(): ?string
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?string $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function getReaction(): Reaction
    {
        return $this->reaction;
    }

    public function setReaction(Reaction $reaction): static
    {
        $this->reaction = $reaction;
        return $this;
    }
}
