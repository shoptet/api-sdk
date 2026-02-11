<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Instores\GetListOfInStoresResponse\GetListOfInStoresResponse\Data\InStores;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\InStoreAddress;
use Shoptet\Api\Sdk\Php\Component\Entity\InStoreContact;

class Item extends Entity
{
    protected int $id;
    protected string $guid;
    protected ?InStoreAddress $address;
    protected InStoreContact $contact;
    protected int $projectCategoryId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): static
    {
        $this->guid = $guid;
        return $this;
    }

    public function getAddress(): ?InStoreAddress
    {
        return $this->address;
    }

    public function setAddress(?InStoreAddress $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function getContact(): InStoreContact
    {
        return $this->contact;
    }

    public function setContact(InStoreContact $contact): static
    {
        $this->contact = $contact;
        return $this;
    }

    public function getProjectCategoryId(): int
    {
        return $this->projectCategoryId;
    }

    public function setProjectCategoryId(int $projectCategoryId): static
    {
        $this->projectCategoryId = $projectCategoryId;
        return $this;
    }
}
