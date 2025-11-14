<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse\Data\SalesChannels;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuid;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse\Data\SalesChannels\Item\Currencies;
use Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse\Data\SalesChannels\Item\Languages;

class Item extends Entity
{
    protected TypeGuid $guid;
    protected string $name;
    protected string $type;
    protected Currencies $currencies;
    protected Languages $languages;
    protected TypeDateTime $createdAt;
    protected TypeDateTimeNullable $updatedAt;

    public function getGuid(): TypeGuid
    {
        return $this->guid;
    }

    public function setGuid(TypeGuid $guid): static
    {
        $this->guid = $guid;
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

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getCurrencies(): Currencies
    {
        return $this->currencies;
    }

    public function setCurrencies(Currencies $currencies): static
    {
        $this->currencies = $currencies;
        return $this;
    }

    public function getLanguages(): Languages
    {
        return $this->languages;
    }

    public function setLanguages(Languages $languages): static
    {
        $this->languages = $languages;
        return $this;
    }

    public function getCreatedAt(): TypeDateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(TypeDateTime $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): TypeDateTimeNullable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(TypeDateTimeNullable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
