<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse\Data\Statuses;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatusesResponse\GetListOfOrderStatusesResponse\Data\Statuses\Item\Documents;

class Item extends Entity
{
    protected float $id;
    protected string $name;
    protected bool $system;
    protected float $order;
    protected bool $markAsPaid;
    protected ?string $color;
    protected ?string $backgroundColor;
    protected bool $changeOrderItems;
    protected bool $stockClaimResolved;
    protected Documents $documents;

    public function getId(): float
    {
        return $this->id;
    }

    public function setId(float $id): static
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

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): static
    {
        $this->system = $system;
        return $this;
    }

    public function getOrder(): float
    {
        return $this->order;
    }

    public function setOrder(float $order): static
    {
        $this->order = $order;
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;
        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): static
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    public function isChangeOrderItems(): bool
    {
        return $this->changeOrderItems;
    }

    public function setChangeOrderItems(bool $changeOrderItems): static
    {
        $this->changeOrderItems = $changeOrderItems;
        return $this;
    }

    public function isStockClaimResolved(): bool
    {
        return $this->stockClaimResolved;
    }

    public function setStockClaimResolved(bool $stockClaimResolved): static
    {
        $this->stockClaimResolved = $stockClaimResolved;
        return $this;
    }

    public function getDocuments(): Documents
    {
        return $this->documents;
    }

    public function setDocuments(Documents $documents): static
    {
        $this->documents = $documents;
        return $this;
    }
}
