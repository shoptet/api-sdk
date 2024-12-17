<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Header extends Entity
{
    protected ?string $backgroundImage;
    protected ?string $image;
    protected ?string $logo;
    protected ?string $color;

    public function getBackgroundImage(): ?string
    {
        return $this->backgroundImage;
    }

    public function setBackgroundImage(?string $backgroundImage): static
    {
        $this->backgroundImage = $backgroundImage;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;
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
}
