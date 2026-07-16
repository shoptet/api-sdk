<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetReviewsSettingsResponse\GetReviewsSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Data extends Entity
{
    protected bool $showDiscussion;
    protected string $authorizationType;
    protected bool $onlyRegisteredUsers;
    protected bool $commentAndFullNameRequired;
    protected bool $sendConfirmationEmail;
    protected bool $showVerificationInfo;
    protected int $reviewsPerPage;
    protected bool $storeRatingEnabled;
    protected bool $storeRatingCommentsRequired;
    protected bool $storeRatingShowVerificationInfo;
    protected bool $verificationIconAllowed;

    public function isShowDiscussion(): bool
    {
        return $this->showDiscussion;
    }

    public function setShowDiscussion(bool $showDiscussion): static
    {
        $this->showDiscussion = $showDiscussion;
        return $this;
    }

    public function getAuthorizationType(): string
    {
        return $this->authorizationType;
    }

    public function setAuthorizationType(string $authorizationType): static
    {
        $this->authorizationType = $authorizationType;
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

    public function isCommentAndFullNameRequired(): bool
    {
        return $this->commentAndFullNameRequired;
    }

    public function setCommentAndFullNameRequired(bool $commentAndFullNameRequired): static
    {
        $this->commentAndFullNameRequired = $commentAndFullNameRequired;
        return $this;
    }

    public function isSendConfirmationEmail(): bool
    {
        return $this->sendConfirmationEmail;
    }

    public function setSendConfirmationEmail(bool $sendConfirmationEmail): static
    {
        $this->sendConfirmationEmail = $sendConfirmationEmail;
        return $this;
    }

    public function isShowVerificationInfo(): bool
    {
        return $this->showVerificationInfo;
    }

    public function setShowVerificationInfo(bool $showVerificationInfo): static
    {
        $this->showVerificationInfo = $showVerificationInfo;
        return $this;
    }

    public function getReviewsPerPage(): int
    {
        return $this->reviewsPerPage;
    }

    public function setReviewsPerPage(int $reviewsPerPage): static
    {
        $this->reviewsPerPage = $reviewsPerPage;
        return $this;
    }

    public function isStoreRatingEnabled(): bool
    {
        return $this->storeRatingEnabled;
    }

    public function setStoreRatingEnabled(bool $storeRatingEnabled): static
    {
        $this->storeRatingEnabled = $storeRatingEnabled;
        return $this;
    }

    public function isStoreRatingCommentsRequired(): bool
    {
        return $this->storeRatingCommentsRequired;
    }

    public function setStoreRatingCommentsRequired(bool $storeRatingCommentsRequired): static
    {
        $this->storeRatingCommentsRequired = $storeRatingCommentsRequired;
        return $this;
    }

    public function isStoreRatingShowVerificationInfo(): bool
    {
        return $this->storeRatingShowVerificationInfo;
    }

    public function setStoreRatingShowVerificationInfo(bool $storeRatingShowVerificationInfo): static
    {
        $this->storeRatingShowVerificationInfo = $storeRatingShowVerificationInfo;
        return $this;
    }

    public function isVerificationIconAllowed(): bool
    {
        return $this->verificationIconAllowed;
    }

    public function setVerificationIconAllowed(bool $verificationIconAllowed): static
    {
        $this->verificationIconAllowed = $verificationIconAllowed;
        return $this;
    }
}
