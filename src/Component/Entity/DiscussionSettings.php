<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class DiscussionSettings extends Entity
{
    protected string $context;
    protected bool $active;
    protected bool $authorizationRequired;
    protected bool $onlyRegisteredUsers;
    protected bool $usersCanAnswer;
    protected int $itemsPerPage;

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): static
    {
        $this->context = $context;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;
        return $this;
    }

    public function isAuthorizationRequired(): bool
    {
        return $this->authorizationRequired;
    }

    public function setAuthorizationRequired(bool $authorizationRequired): static
    {
        $this->authorizationRequired = $authorizationRequired;
        return $this;
    }

    public function isOnlyRegisteredUsers(): bool
    {
        return $this->onlyRegisteredUsers;
    }

    public function setOnlyRegisteredUsers(bool $onlyRegisteredUsers): static
    {
        $this->onlyRegisteredUsers = $onlyRegisteredUsers;
        return $this;
    }

    public function isUsersCanAnswer(): bool
    {
        return $this->usersCanAnswer;
    }

    public function setUsersCanAnswer(bool $usersCanAnswer): static
    {
        $this->usersCanAnswer = $usersCanAnswer;
        return $this;
    }

    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage(int $itemsPerPage): static
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
}
