<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse\Data\OrderHistory;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrderResponse\GetListOfRemarksForOrderResponse\Data\OrderHistory\Item\User;

class Item extends Entity
{
    protected float $id;
    protected TypeDateTime $creationTime;
    protected string $text;
    protected ?User $user;
    protected bool $system;
    protected string $type;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
    {
        $this->id = $id;
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

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): static
    {
        $this->system = $system;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }
}
