<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\CustomerBatchCreate;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Settings extends Entity
{
    protected ?bool $sendRegistrationEmail;
    protected ?bool $suppressMandatoryFieldsCheck;

    public function getSendRegistrationEmail(): ?bool
    {
        return $this->sendRegistrationEmail;
    }

    public function setSendRegistrationEmail(?bool $sendRegistrationEmail): static
    {
        $this->sendRegistrationEmail = $sendRegistrationEmail;
        return $this;
    }

    public function getSuppressMandatoryFieldsCheck(): ?bool
    {
        return $this->suppressMandatoryFieldsCheck;
    }

    public function setSuppressMandatoryFieldsCheck(?bool $suppressMandatoryFieldsCheck): static
    {
        $this->suppressMandatoryFieldsCheck = $suppressMandatoryFieldsCheck;
        return $this;
    }
}
