<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlagResponse\CreateProductFlagResponse\Data\Flags;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Item extends Entity
{
    protected string $code;
    protected string $title;
    protected bool $system;
    protected ?string $color;
    protected bool $showInDetail;
    protected bool $showInCategory;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
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

    public function isSystem(): bool
    {
        return $this->system;
    }

    public function setSystem(bool $system): static
    {
        $this->system = $system;
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

    public function isShowInDetail(): bool
    {
        return $this->showInDetail;
    }

    public function setShowInDetail(bool $showInDetail): static
    {
        $this->showInDetail = $showInDetail;
        return $this;
    }

    public function isShowInCategory(): bool
    {
        return $this->showInCategory;
    }

    public function setShowInCategory(bool $showInCategory): static
    {
        $this->showInCategory = $showInCategory;
        return $this;
    }
}
