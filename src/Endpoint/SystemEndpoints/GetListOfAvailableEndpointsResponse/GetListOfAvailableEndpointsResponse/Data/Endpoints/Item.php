<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse\Data\Endpoints;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpointsResponse\GetListOfAvailableEndpointsResponse\Data\Endpoints\Item\Group;

class Item extends Entity
{
    protected string $endpoint;
    protected string $description;
    protected Group $group;
    protected string $access;
    protected ?string $action;

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): static
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getGroup(): Group
    {
        return $this->group;
    }

    public function setGroup(Group $group): static
    {
        $this->group = $group;
        return $this;
    }

    public function getAccess(): string
    {
        return $this->access;
    }

    public function setAccess(string $access): static
    {
        $this->access = $access;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): static
    {
        $this->action = $action;
        return $this;
    }
}
