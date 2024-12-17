<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\OrderStatuses\Statuses;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected int $id;
    protected int $order;
    protected string $name;
    protected bool $markAsPaid;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): static
    {
        $this->order = $order;
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

    public function isMarkAsPaid(): bool
    {
        return $this->markAsPaid;
    }

    public function setMarkAsPaid(bool $markAsPaid): static
    {
        $this->markAsPaid = $markAsPaid;
        return $this;
    }
}
